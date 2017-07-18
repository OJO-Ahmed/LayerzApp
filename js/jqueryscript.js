var users = [
	{
		name: 'Funmi',
		gender: 'F',
		hobby: 'party',
		avatar: 'profile1.jpg'
	},
	{
		name: 'Bimbo',
		gender: 'F',
		hobby: 'music',
		avatar: 'profile4.jpg'
	},
	{
		name: 'Nick',
		gender: 'M',
		hobby: 'Reading',
		avatar: 'nick.jpg'
	},
	{
		name: 'John',
		gender: 'M',
		hobby: 'Reading',
		avatar: 'profile2.png'
	},
	{
		name: 'Ronaldo',
		gender: 'M',
		hobby: 'Football',
		avatar: '9.jpg'
	},
	{
		name: 'Webmaster: Ahmed',
		gender: 'M',
		hobby: 'coding',
		avatar: 'Ahmed.jpg'
	},
	{
		name: 'lucky',
		gender: 'F',
		hobby: 'party',
		avatar: '12.jpg'
	}
];

window.addEventListener('load', function(){

	var result = document.getElementById('result');

	function search (){
		//console.log('I\'m searching.....');
		//get hobby
		var hobbyinput = document.getElementById('hobby');
		var hobby = hobbyinput.value;
		//console.log(hobby);
		
		//get gender
		var genderinput = document.getElementById('gender');
		var s = genderinput.selectedIndex;
		var gender = genderinput.options[s].value;
		//console.log(gender);

		var resultsHTML = '';
		var userlength = users.length;
		for(var i = 0; i < userlength; i++){
			//check for gender
			if(gender == 'A' || gender == users[i].gender){
				//check for hobby
				if(hobby == '' || hobby == users[i].hobby.toLowerCase()){
					resultsHTML += ' '+ '<div class="person-row">\
						<a href="pix/'+ users[i].avatar+ '">\
						<img class="profile" src="pix/'+ users[i].avatar +'" alt="profile pix" />\
						</a>\
						<div class="person-info">\
						<h3 class="name">' + users[i].name + '</h3>\
						<div>' + users[i].hobby + '</div>\
						</div>\
						<button>Add as a friend</button></div>';
				}
				// else if (hobby != users[i].hobby){
				// 	resultsHTML = '<p>'+ hobby +' not found</p';
				// }
			}
		}

		//get search result
		result.innerHTML = resultsHTML;
		
	}

	var searchBtn = document.getElementById('searchBtn');
	
	searchBtn.addEventListener('click', search);
});
