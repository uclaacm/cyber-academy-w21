require('dotenv').config()

const express = require('express');
const app = express();
var mongo = require('mongodb').MongoClient;
var jwt = require('jsonwebtoken')

// connect to mongodb
const connectURI = 'mongodb+srv://admin:admin@cluster0.gxm4l.mongodb.net/Database1?retryWrites=true&w=majority';


// View engine setup 
app.use(express.static(__dirname + '/public'));
app.set('view engine', 'ejs'); 


var bodyParser = require('body-parser');
const process = require('process');
const { MongoClient, connect } = require('mongodb');

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: true}));

app.get('/site', (req, res) => {
    res.render("index");
})

app.get('/success', ensureToken, (req, res) => {
    jwt.verify(req.token, 
        'secret_key', function(err, data) {
            if (err) {
                res.sendStatus(403);
            }
            else {
                res.render("success");
            }
        })
})
app.post('/login', (req, res) => {
    
    console.log(req.body)
    var username = req.body.username;
    var pass = req.body.password;
    
    console.log(username)
    console.log(pass)

    if (!username || !pass) {
        res.send("One or more fields were not provided");
        return
    }

    var query = {
        'username': username,
        'password': pass
    }
    MongoClient.connect(connectURI, function(err, db) {
        var dbo = db.db('Database1');
        dbo.collection('users').findOne(query, comparePass);
        function comparePass(err, dbRecord) {
            if (err)
            {
                throw err;
            }
            if (dbRecord != null && dbRecord.username === "admin")
            {
                var token = jwt.sign({username: username, flag:"flag{always_see_what_you_have_been_given}" }, 'secret_key');
                res.cookie("token", token);
                res.cookie("username", dbRecord.username);
                db.close();
                res.redirect("/success");
            }
            else
            {  
                db.close();
                res.status(200);
                res.send("Nice try")
            }
        }

    });
})

function ensureToken(req, res, next) {
    const bearerHeader = req.headers["authorization"];
    if (typeof bearerHeader !== 'undefined') {
        const bearer = bearerHeader.split(" ");
        const bearerToken = bearer[1];
        req.token = bearerToken;
        next();
    }
    else {
        res.sendStatus(403);
    }
}

app.listen(9000)
