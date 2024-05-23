var mysql = require('mysql');

var con = mysql.createConnection({

  host: "localhost",
  user: "root",
  password: "",
  database: "gicontra_sewingFactory"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "INSERT INTO badlah (badlahT_ID, clientname) VALUES (0, '-')";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("1 record inserted");
  });
});