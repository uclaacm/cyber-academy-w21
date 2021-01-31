require("dotenv").config();
let jwt = require("jsonwebtoken");

var express = require("express");
var bodyParser = require("body-parser");
const middleware = require("./middleware");
var sqlite3 = require("sqlite3").verbose();

var app = express();
app.use(express.static("."));
app.use(bodyParser.urlencoded({ extended: true }));

const ejs = require("ejs");
app.set("view engine", "ejs");

var cookieParser = require("cookie-parser");
app.use(cookieParser());

var db = new sqlite3.Database(
  (filename = "./injection.db"),
  sqlite3.OPEN_READONLY
);

app.get("/", function (req, res) {
  res.render("index", { data: { authorization: "none", info: "" } });
});

app.post("/login", function (req, res) {
  var username = req.body.username;
  var password = req.body.password;
  var query =
    "SELECT name, notes FROM user where username = '" +
    username +
    "' and password = '" +
    password +
    "'";

  db.get(query, function (err, row) {
    if (err) {
      console.log("ERROR", err);
      res.send(err.message);
    } else if (row) {
      var token = jwt.sign(
        { username: row.username, name: row.name },
        process.env.JWT_SECRET,
        { expiresIn: "1h" }
      );
      res.cookie("authorization", token);
      res.cookie("user", row.name);

      res.render("user_admin", {
        data: { authorization: "authorized", info: "", notes: row.notes },
      });
    } else {
      res.render("index", {
        data: { authorization: "unauthorized", info: "" },
      });
    }
  });
});

app.get("/user_home", middleware.checkToken, function (req, res) {
  if (!res) {
    res.render("user", { data: { authorization: "none", info: "" } });
    return;
  }
  res.render("user_admin", {
    data: { authorization: "authorized", info: "" },
  });
});

app.get("/blog", middleware.checkToken, function (req, res) {
  if (!res) {
    res.render("user", { data: { authorization: "none", info: "" } });
    return;
  }
  res.render("blog", { data: { authorization: "authorized", info: "" } });
});

app.get("/logout", function (req, res) {
  res.cookie("authorization", "none");
  res.cookie("user", "none");
  res.render("index", { data: { authorization: "none", info: "" } });
});

app.get("/index_check", middleware.checkToken, function (req, res) {
  if (!res) {
    res.render("index", { data: { authorization: "none", info: "" } });
    return;
  }
  res.render("user_admin", { data: { authorization: "authorized", info: "" } });
});

app.get("/index", function (req, res) {
  res.render("index", { data: { authorization: "none", info: "" } });
});

app.post("/view_user", function (req, res) {
  var password = req.body.password;
  var name = req.cookies["user"];
  var query =
    "SELECT username, name, DOB, POB, notes FROM user where name = '" +
    name +
    "' and password = '" +
    password +
    "'";

  var split_by_semicolon = query.split(";");
  split_by_semicolon.forEach((value) => {
    if (value.search("--") > 0) {
      var idx = split_by_semicolon.indexOf(value);
      split_by_semicolon.splice(idx, 1);
    }
  });

  var result_array = [];
  function run_query(query) {
    db.get(query, function (err, row) {
      if (err) {
        console.log(err);
        result_array.push({ Message: "ERROR" });
      } else if (row) {
        result_array.push(row);
      } else {
        result_array.push({ Message: "Incorrect Input" });
      }
    });
  }

  for (var i = 0; i < split_by_semicolon.length; i++) {
    run_query(split_by_semicolon[i]);
  }

  //render results of queries...
  // wait a few thousand ms for the queries to finish running
  setTimeout(() => {
    res.render("user_admin", {
      data: {
        authorization: "authorized",
        info: { result: result_array, length: split_by_semicolon.length },
      },
    });
  }, 3000);
});

app.get("/info", function (req, res) {
  res.render("info");
});

app.listen(3000);
