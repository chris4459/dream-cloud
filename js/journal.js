// ***** Chris Lee *****

var dream_liked = [false,false,false,false,false,false,false,false,false,false];

function increment_likes(id, object_id){
	Parse.initialize("iO1uklYpUX5pR8WxX8nisrwA7wTOs7OL0SawDaDh", "TaxHerSeSUqqrfsCYmbmCvUmx7pg1q86WkvKPNcE");

	var dream_id = document.getElementById("dream_"+id);
	var likes = Number(dream_id.innerHTML);

	console.log(object_id);


// var TestObject = Parse.Object.extend("TestObject");
// var testObject = new TestObject();
// testObject.save({foo: "bar"}).then(function(object) {
//   alert("yay! it worked");
// });
	var DreamObject = Parse.Object.extend("Dream");
	var query = new Parse.Query(DreamObject);
	query.equalTo("objectId", object_id);


	if (!dream_liked[id]) {
		dream_id.innerHTML = likes + 1;
		dream_liked[id] = true;
		document.getElementById("heart_"+id).style.color = 'red';
		document.getElementById("thumbs_"+id).style.color = 'blue';

		query.find({
		  success: function(results) {
		    // alert("Successfully retrieved " + results.length + " scores.");
		    // Do something with the returned Parse.Object values
		    // for (var i = 0; i < results.length; i++) { 
		    //   var object = results[i];
		    //   alert(object.id + ' - ' + object.get('name'));
		    // }
		    var dream = results[0];
		    var current_likes = dream.get('likes');
		    // alert("current_likes: " + current_likes);
		    dream.set('likes', current_likes + 1);
		    dream.save();

 
		  },
		  error: function(error) {
		    alert("Error: " + error.code + " " + error.message);
		  }
		});

	}
	else{
		dream_id.innerHTML = likes - 1;
		dream_liked[id] = false;
		document.getElementById("heart_"+id).removeAttribute("style");
		document.getElementById("thumbs_"+id).removeAttribute("style");

		query.find({
		  success: function(results) {
		    // alert("Successfully retrieved " + results.length + " scores.");
		    // Do something with the returned Parse.Object values
		    // for (var i = 0; i < results.length; i++) { 
		    //   var object = results[i];
		    //   alert(object.id + ' - ' + object.get('name'));
		    // }
		    var dream = results[0];
		    var current_likes = dream.get('likes');
		    // alert("current_likes: " + current_likes);
		    dream.set('likes', current_likes - 1);
		    dream.save();

 
		  },
		  error: function(error) {
		    alert("Error: " + error.code + " " + error.message);
		  }
		});
	}

}

$('a#h').on('click', function(){
	alert(1);
});



