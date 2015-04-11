var dream_liked = false;

function increment_likes(object_id){
	Parse.initialize("iO1uklYpUX5pR8WxX8nisrwA7wTOs7OL0SawDaDh", "TaxHerSeSUqqrfsCYmbmCvUmx7pg1q86WkvKPNcE");

	var dream_likes = document.getElementById("dream_likes");
	var likes = Number(dream_likes.innerHTML);


	var DreamObject = Parse.Object.extend("Dream");
	var query = new Parse.Query(DreamObject);
	query.equalTo("objectId", object_id);

	if (!dream_liked) {
		dream_likes.innerHTML = likes + 1;
		dream_liked = true;
		document.getElementById("heart-like").style.color = 'red';
		query.find({
		  success: function(results) {

		    var dream = results[0];
		    var current_likes = dream.get('likes');

		    dream.set('likes', current_likes + 1);
		    dream.save();

 
		  },
		  error: function(error) {
		    alert("Error: " + error.code + " " + error.message);
		  }
		});
	}
	else{
		dream_likes.innerHTML = likes - 1;
		dream_liked = false;
		document.getElementById("heart-like").style.color = 'rgb(233, 150, 122)';
		query.find({
		  success: function(results) {

		    var dream = results[0];
		    var current_likes = dream.get('likes');

		    dream.set('likes', current_likes - 1);
		    dream.save();

 
		  },
		  error: function(error) {
		    alert("Error: " + error.code + " " + error.message);
		  }
		});
	}
}

