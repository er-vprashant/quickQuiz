var mysql= require('mysql');


var connection = mysql.creatConnection({
  host:'localhost',
  user:'id8971843_ervprashant',
  password:'Prashant@2503',
  database:'id8971843_quickquiz'

});


connection.connect(function(){
  if(!!error)
  console.log("Error connecting database");
  else {
    console.log("database connected");
  }
})

function validate(){
  var un=$("#username").val();
  var ps=$("#pword").val();
  alert(ps)
  if(un==""){
    $("#nameErr").html("Enter username")
  }
}
