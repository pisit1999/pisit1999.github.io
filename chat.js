var firebaseConfig = {
    apiKey: "AIzaSyD2eczk_-toaiOssi8zEcT0OnlYy3LaRTo",
  authDomain: "pisit-562ad.firebaseapp.com",
  databaseURL: "https://pisit-562ad-default-rtdb.firebaseio.com",
  projectId: "pisit-562ad",
  storageBucket: "pisit-562ad.appspot.com",
  messagingSenderId: "1064961787241",
  appId: "1:1064961787241:web:4a24788afc00f4423729f8",
  measurementId: "G-X5C0CRWYV5"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

  var name = localStorage.getItem("name");

  function send(){
      var msg = document.getElementById('msg_text').value;
      if(msg != ""){
        firebase.database().ref("messages").push({
            msg : msg,
            sender : name

        }).then(function(){
            document.getElementById('msg_text').value = "";
        })
      }
  }

  firebase.database().ref("messages").on("child_added" , function(snapshot){
      var username = snapshot.val().sender;
      var msg = snapshot.val().msg;
      var html = "";
      if(username == name){
          html += "<div class='message_me' align='right'><p class='user'>" +username + "</p><p class='msg_me'>"+ msg +"</p></div>";
          document.getElementById("box_messages").innerHTML += html;

      }else{
        html += "<div class='message_user' align='left'><p class='user'>" +username + "</p><p class='msg_user'>"+ msg +"</p></div>";
        document.getElementById("box_messages").innerHTML += html;
      }

      var div_obj = document.getElementById("box_messages");
      div_obj.scrollTop = div_obj.scrollHeight;
  });