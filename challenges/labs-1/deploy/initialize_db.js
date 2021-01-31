//run this file (node initialize_db.js) to create a .db file (delete the existing one of the same name first)

var sqlite3 = require("sqlite3").verbose();

var db = new sqlite3.Database((filename = "./injection.db"));
db.serialize(function () {
  db.run(
    "CREATE TABLE user (username TEXT, password TEXT, name TEXT, DOB TEXT, POB TEXT, notes TEXT)"
  );
  db.run(
    "INSERT INTO user VALUES ('IT_SUPPORT', 'IT@123', 'IT Support Account', '1/1/00', 'DEFAULT', 'for passwords: online-toolz encryption, table: employee_passwords')"
  );
  db.run(
    "INSERT INTO user VALUES ('admin', 'admin123', 'App Administrator', '1/1/00', 'DEFAULT', 'Congrats! you found me! flag{n0_inf0_aBt_l3g3ndar1es_here}')"
  );
  db.run(
    "INSERT INTO user VALUES ('m_reyes', 'miranda_is_cool', 'Employee Miranda Reyes', '2/28/95', 'Luna',  'no notes yet')"
  );
  db.run(
    "INSERT INTO user VALUES ('r_james', 'ricky425', 'Employee Rick James', '3/20/97', 'Portland',  'no notes yet')"
  );
  db.run(
    "INSERT INTO user VALUES ('c_bert', 'legen_dary', 'Founder Cye Bert', '09/07/1970', 'Ontaria',  ' tracking of the legendaries. have created table legendary_report for all employees to add to since sightings are becomming more and more rare. All my entries shall be under my name to keep track of the origin of the testimonies')"
  );
  db.run("CREATE TABLE employee_passwords (name TEXT, password TEXT)");
  db.run(
    "INSERT INTO employee_passwords VALUES ('Rick James', 'I/PgvFo+euFhyeKIy5I54sZI6u/zFDuY/zZVCctzZzc=')"
  );
  db.run(
    "INSERT INTO employee_passwords VALUES ('Miranda Reyes', 'JiIICB5r0tiIifp2iRCmPXS3FD3G7A195nQ5XfmSEc4=')"
  );
  db.run("CREATE TABLE legendary_report (name TEXT, time TEXT, place TEXT)");
  db.run(
    "INSERT INTO legendary_report VALUES ('Cye Bert', 'June 1987', 'Ontario')"
  );
  db.run(
    "INSERT INTO legendary_report VALUES ('Cye Bert', 'October 1993', 'Tokyo')"
  );
  db.run(
    "INSERT INTO legendary_report VALUES ('Cye Bert', 'January 1999', 'Mendoza')"
  );
  db.run(
    "INSERT INTO legendary_report VALUES ('Cye Bert', 'November 2007', 'San Francisco')"
  );
  db.run(
    "INSERT INTO legendary_report VALUES ('Anastaysa Vich', '2015', 'Alexandria')"
  );
  db.run(
    "INSERT INTO legendary_report VALUES ('Cye Bert', 'August 2020', 'Moscow')"
  );
});
