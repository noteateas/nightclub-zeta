$(document).ready(function(){

	/*recursive menu*/
		$('.recursiveMenu').hover(
		function(){
			var children = this.getElementsByTagName('ul');
			$(this).css({'background-color':'#424242'});
			$(children).css({'display':'block', 'width':'100%'});
		},
		function(){
			$(this).css({'background-color':'transparent'});
			$('.recursiveMenu ul').css({'display':'none'});
		} 
		);
	/***************/

	/*edit menu*/
		$('#menuInsert').click(function(){
			var scrollTop = $(window).scrollTop();
			open('#menuInsertBlock',scrollTop);
		});
		$('.close').click(function(){
			close('#menuInsertBlock');
			$('#errorsBlock').css({'display':'none'})
		});

		$('#menuUpdate').click(function(){
			var scrollTop = $(window).scrollTop();
			open('#menuUpdateBlock',scrollTop);
		});
		$('.close').click(function(){
			close('#menuUpdateBlock');
			$('#errorsBlock').css({'display':'none'})
		});
		$('#menuUpdateSelect').change(function(){
			var menu = document.getElementById('menuUpdateSelect');
			var menuId = menu.options[menu.selectedIndex].value;
			$.ajax({
				url: "models/menu/getOneMenu.php",
				method: "POST",
				dataType : "json",
				data : {
					id: menuId
				},
				success: function(data){
					writeMenuUpdate(data)
				},
				error(xhr,status,error){
					console.log(xhr);
					console.log(status);
					console.log(error);
				}
			});
		})

		$('#menuDelete').click(function(){
			var scrollTop = $(window).scrollTop();
			open('#menuDeleteBlock',scrollTop);
		});
		$('.close').click(function(){
			close('#menuDeleteBlock');
			$('#errorsBlock').css({'display':'none'})
		});
	/***********/

	/*sort and filter*/
		$('#sortProgram').change(function(){
			var value = $(this).val();
			if(value!=0){
				sortProgram(value);
			}
		});
		$('#filterProgram').change(function(){
			var value = $(this).val();
			filterProgram(value);
		})
	/**************/

	/*order ticket/program*/
		$('#orderTicket').click(function(){
			var scrollTop = $(window).scrollTop();
			open('#orderTicketBlock',scrollTop);
		});
		$('.close').click(function(){
			close('#orderTicketBlock');
			$('#errorsBlock').css({'display':'none'})
		});
	/**************/

	/*edit stages*/
		$('#stageInsert').click(function(){
			var scrollTop = $(window).scrollTop();
			open('#stageInsertBlock',scrollTop);
		});
		$('.close').click(function(){
			close('#stageInsertBlock');
			$('#errorsBlock').css({'display':'none'})
		});

		$('#stageUpdate').click(function(){
			var scrollTop = $(window).scrollTop();
			open('#stageUpdateBlock',scrollTop);
		});
		$('.close').click(function(){
			close('#stageUpdateBlock');
			$('#errorsBlock').css({'display':'none'})
		});
		$('#stageUpdateSelect').change(function(){
			var stage = document.getElementById('stageUpdateSelect');
			var stageId = stage.options[stage.selectedIndex].value;
			$.ajax({
				url: "models/stage/getOneStage.php",
				method: "POST",
				dataType : "json",
				data : {
					id: stageId
				},
				success: function(data){
					writeStageUpdate(data)
				},
				error(xhr,status,error){
					console.log(xhr);
					console.log(status);
					console.log(error);
				}
			});
		})

		$('#stageDelete').click(function(){
			var scrollTop = $(window).scrollTop();
			open('#stageDeleteBlock',scrollTop);
		});
		$('.close').click(function(){
			close('#stageDeleteBlock');
			$('#errorsBlock').css({'display':'none'})
		});
	/*************/

	/*edit program*/
		$('#programInsert').click(function(){
			var scrollTop = $(window).scrollTop();
			open('#programInsertBlock',scrollTop);
		});
		$('.close').click(function(){
			close('#programInsertBlock');
			$('#errorsBlock').css({'display':'none'})
		});

		$('#idProgramUpdate').change(function(){
			var program = document.getElementById('idProgramUpdate');
			var programId = program.options[program.selectedIndex].value;
			$.ajax({
				url: "models/program/getOne.php",
				method: "POST",
				dataType : "json",
				data : {
					id: programId
				},
				success: function(data){
					writeProgramUpdate(data)
				},
				error(xhr,status,error){
					console.log(xhr);
					console.log(status);
					console.log(error);
				}
			});
		})
		$('#programUpdate').click(function(){
			var scrollTop = $(window).scrollTop();
			open('#programUpdateBlock',scrollTop);
		});
		$('.close').click(function(){
			close('#programUpdateBlock');
			$('#errorsBlock').css({'display':'none'})
		});

		$('#programDelete').click(function(){
			var scrollTop = $(window).scrollTop();
			open('#programDeleteBlock',scrollTop);
		});
		$('.close').click(function(){
			close('#programDeleteBlock');
			$('#errorsBlock').css({'display':'none'})
		});
	/**************/


	/*edit news*/
		$('#newsInsert').click(function(){
			var scrollTop = $(window).scrollTop();
			open('#newsInsertBlock',scrollTop);
		});
		$('.close').click(function(){
			close('#newsInsertBlock');
			$('#errorsBlock').css({'display':'none'})
		});

		$('#newsUpdate').click(function(){
			var scrollTop = $(window).scrollTop();
			open('#newsUpdateBlock',scrollTop);
		});
		$('.close').click(function(){
			close('#newsUpdateBlock');
			$('#errorsBlock').css({'display':'none'})
		});

		$('#newsDelete').click(function(){
			var scrollTop = $(window).scrollTop();
			open('#newsDeleteBlock',scrollTop);
		});
		$('.close').click(function(){
			close('#newsDeleteBlock');
			$('#errorsBlock').css({'display':'none'})
		});

		$('#newsUpdateSelect').change(function(){
			var newsBlock = document.getElementById('newsUpdateSelect');
			var newsId = newsBlock.options[newsBlock.selectedIndex].value;
			writeNewsUpdate(newsId)
			/*$.ajax({
				url: "index.php/models/news/getOneNews.php",
				method: "POST",
				dataType : "json",
				data : {
					id: newsId
				},
				success: function(data){
					writeNewsUpdate(data)
				},
				error(xhr,status,error){
					console.log(xhr);
					console.log(status);
					console.log(error);
				}
			});*/
		})
	/***********/


	/*global variables -> functions*/
		$.when((getArtists()).done(function(){
			
		}));
		$.when((getStages()).done(function(){
			
		}));
		$.when((getMenu()).done(function(){
			
		}));
		$.when((getTypes()).done(function(){
			
		}));
		$.when((getNews()).done(function(){
			
		}));
	/******************************/

	/*magnifying photo effect*/
		$('.photosStage img').click(function(){
			//var src = this.dataset.src;
			var src = $(this).attr('src');
			var alt = $(this).attr('alt');
			magnifyPhoto(src,alt);
		})
	/*************************/

	/*download excel*/
	$('#dlExcel').click(function(){
		dlExcel();
	})
	/****************/

});

/*general*/
function capitalize(string){

	return string.charAt(0).toUpperCase() + string.slice(1);
}
function close(block){
	$(block).css({'visibility': 'hidden', 'width': '0%', 'height':'0%', 'top':'0%'})
	$('body').css({'overflow':'visible'})
}
function open(block, offset){
	$(block)
	.css({'visibility': 'visible', 'top':offset})
	.animate({'width':'100%', 'height': '100vh'}, 400)
	$('body').css({'overflow':'hidden'})
}
function writeProgram(arr){
	var str = '';
	for(el of arr){
		name = el.name;
		cover = el.cover;
		date = el.date;
		id = el.id_program_artist;

		str += `<div class="twoBlockChild">
				<a href="index.php?page=program?id=${id}">
					<img src="assets/img/program/${cover}" alt="${name}"/>
					<div id="title">
						<h2>${name}</h2>
						<p>${date}</p>
					</div>
				</a>
			</div>`
	}
	document.getElementById('twoBlockHolderProgram').innerHTML = str;
}
function writeProgramUpdate(arr){
	console.log(arr);

	var str = `<div><input type="text" id="nameProgramUpdate" name="nameProgramUpdate" placeholder="Name" value="${arr.program_name}"/></div>
					<div>
						<textarea id="descProgramUpdate" name="descProgramUpdate" placeholder="Description">${arr.program_description}</textarea>
					</div>
					<div>
						<select id="programStageUpdateSelect" name="programStageUpdateSelect">
							<option value='0'>Stages</option>`

							for(stage of stages){
								if(stage.id_stage==arr.stage_id){
									str+= `<option value=${stage.id_stage} selected>${capitalize(stage.name)}</option>`
								}
								else str+= `<option value=${stage.id_stage}>${capitalize(stage.name)}</option>`
							}

						str+=`</select>
					</div>
					<div>
						<select id="artistProgramUpdateSelect" name="artistProgramUpdateSelect">
							<option value='0'>Artists</option>`

							for(artist of artists){
									if(artist.id_artist==arr.id_artist){
										str+= `<option value=${artist.id_artist} selected>${artist.name}</option>`
									}
									else str+= `<option value=${artist.id_artist}>${artist.name}</option>`
								}
								
						str+=`</select>
					</div>
					<div><input type="text" id="priceProgramUpdate" name="priceProgramUpdate" value="${arr.price}"></div>
					<div><input type="date" id="dateProgramUpdate" name="dateProgramUpdate" value="${arr.date}"></div>
					<div><input type="time" id="timeProgramUpdate" name="timeProgramUpdate" value="${arr.time}"></div>
					<div><p style="font-size: 11px;">Only choose a photo if you'd like to change it.</p></div>
					<div><input type="file" id="programPhotoUpdate" name="programPhotoUpdate"/></div>

					<div class="errorsBlock" id="errorsProgramUpdate">
								
					</div>
					<div><input type="submit" name="programUpdateSubmit"></div>`;

	document.getElementById('programUpdateStructure').innerHTML = str;
}
function writeStageUpdate(arr){
	str = ''

	str+= `<div><input type="text" id="nameStageUpdate" name="nameStageUpdate" value="${arr.name}"/></div>
			<div><textarea id="descriptionStageUpdate" name="descriptionStageUpdate">${arr.stage_description}</textarea></div>
			<div><input type="text" id="capacityUpdate" name="capacityUpdate" value="${arr.capacity}"/></div>
			<div><p style="font-size: 11px;">Choose a file if you would like to add a photo.</p></div>
			<div><input type="file" id="stagePhotoUpdate" name="stagePhotoUpdate"/></div>
			<div class="errorsBlock" id="errorsStageUpdate"></div>
			<div><input type="submit" name="stageUpdateSubmit"></div>`
	document.getElementById('stageUpdateStructure').innerHTML = str;
}
function writeMenuUpdate(arr){
	str = ''

	str += `<div><input type="text" id="nameMenuUpdate" name="nameMenuUpdate" value="${arr.name}"/></div>
					<div><input type="text" id="linkMenuUpdate" name="linkMenuUpdate" value="${arr.link}"/></div>
					<div><input type="text" id="levelMenuUpdate" name="levelMenuUpdate" value="${arr.level}"/></div>
					<div>
						<select id="typeMenuUpdateSelect" name="typeMenuUpdateSelect">
							<option value='0'>Type options</option>`
								
								for(el of types){
									let typeName = el.type;
									if(arr.type == typeName)
										str += `<option value='${typeName}' selected>${typeName}</option>`;
									else
										str += `<option value='${typeName}'>${typeName}</option>`;
								}
								
						str+= `</select>
					</div>
					<div><p style="font-size: 11px;">If you wish to change the parent category, please select one of the following.</p></div>
					<div>
						<select id="menuParentUpdateSelect" name="menuParentUpdateSelect">
							<option value='0'>Parent menu options</option>`

								for(el of menu) {
									let menuId = el.id_menu;
									let menuName = el.name;
									if(arr.parent_id == menuId)
										str += `<option value=${menuId} selected>${menuName}</option>`
									else
										str += `<option value=${menuId}>${menuName}</option>`;
									
								}
								
						str += `</select>
					</div>
					<div class="errorsBlock" id="errorsMenuUpdate"></div>
					<div><input type="submit" name="menuUpdateSubmit"></div>`

	document.getElementById('menuUpdateStructure').innerHTML = str;
}
function writeNewsUpdate(id){
	str=''
	for(el of news){
		if(id==el.id_news){
			str +=`<div><input type="text" id="titleNewsUpdate" name="titleNewsUpdate" value=${el.title}></div>
			<div><textarea id="textUpdateArea" name="textUpdateArea">${el.text}</textarea></div>
				<div class="errorsBlock" id="errorsNewsUpdate"></div>
				<div><input type="submit" name="newsUpdateSubmit"></div>`
		}
	}
	document.getElementById('newsUpdateStructure').innerHTML = str;
}
/*get*/
function getArtists(){
	return $.ajax({
		url: "models/artist/getAllArtist.php",
		method: "POST",
		dataType : "json",
		success: function(data){
			artists = data;
		},
		error(xhr,status,error){
			console.log(xhr);
			console.log(status);
			console.log(error);
		}
	});
}
function getStages(){
	return $.ajax({
		url: "models/stage/getAllStage.php",
		method: "POST",
		dataType : "json",
		success: function(data){
			stages = data;
		},
		error(xhr,status,error){
			console.log(xhr);
			console.log(status);
			console.log(error);
		}
	});
}
function getNews(){
	return $.ajax({
		url: "models/news/getAllNews.php",
		method: "POST",
		dataType : "json",
		success: function(data){
			news = data;
		},
		error(xhr,status,error){
			console.log(xhr);
			console.log(status);
			console.log(error);
		}
	});
}
function getMenu(){
	return $.ajax({
		url: "models/menu/getAllMenu.php",
		method: "POST",
		dataType : "json",
		success: function(data){
			menu = data;
		},
		error(xhr,status,error){
			console.log(xhr);
			console.log(status);
			console.log(error);
		}
	});
}
function getTypes(){
	return $.ajax({
		url: "models/menu/getAllType.php",
		method: "POST",
		dataType : "json",
		success: function(data){
			types = data;
		},
		error(xhr,status,error){
			console.log(xhr);
			console.log(status);
			console.log(error);
		}
	});
}
/****/
function magnifyPhoto(src,alt){
	document.getElementById('magnifiedPhoto').innerHTML = '';

	var str = `<img src="${src}" alt="${src}"/>`
	str += `<div class="close">
				<span></span>
				<span></span>
			</div>`;

	document.getElementById('magnifiedPhoto').innerHTML = str;

	var scrollTop = $(window).scrollTop();
	open('#magnifiedPhoto',scrollTop);

	$('.close').click(function(){
		close('#magnifiedPhoto');
		$('#errorsBlock').css({'display':'none'})
	});
	
}
/*********/


/*register/log*/
function proveraRegister(){
	var errors=[];
	document.getElementById('registerErrorsBlock').innerHTML = '';
	var regexFirstName = /^[A-Z][a-z]{2,30}(\s[A-Z][a-z]{2,30})*$/,
		regexLastName = /^[A-Z][a-z]{2,30}(\s[A-Z][a-z]{2,30})*$/,
		regexUser = /^(?=.*[A-z])(?!\s)[A-z\d\.]{3,25}$/,
		regexEmail = /^([A-z][A-z0-9-._]{2,35})\@([A-z]{3,10}\.[a-z]{2,5}(.[a-z]{2,5})?)$/,
		regexPassword = /^(?=.*[a-z])(?=.*\d)(?=.*[A-Z]).{3,30}$/;

	var firstName = document.getElementById("firstName"),
		lastName = document.getElementById("lastName"),
		username = document.getElementById("usernameRegister"),
		email = document.getElementById("emailRegister"),
		password = document.getElementById("passwordRegister"),
		passwordConfirm = document.getElementById("passwordConfirm");

	var firstNameValue = document.getElementById("firstName").value.trim(),
		lastNameValue = document.getElementById("lastName").value.trim(),
		usernameValue = document.getElementById("usernameRegister").value.trim(),
		emailValue = document.getElementById("emailRegister").value.trim(),
		passwordValue = document.getElementById("passwordRegister").value,
		passwordConfirmValue = document.getElementById("passwordConfirm").value;

	valid = true;
	if(!(regexFirstName.test(firstNameValue))){
		firstName.style.borderBottom = "2px solid #ff4a4a";
		valid = false;
		errors.push('<div class="error"	><p>First name at least one capitalized word.</p></div>')
	} else{
		firstName.style.borderBottom = "2px solid #fac864";
	}
	if(!(regexLastName.test(lastNameValue))){
		lastName.style.borderBottom = "2px solid #ff4a4a";
		valid = false;
		errors.push('<div class="error"	><p>Last name at least one capitalized word.</p></div>')
	} else{
		lastName.style.borderBottom = "2px solid #fac864";
	}
	
	if(!(regexUser.test(usernameValue))){
		username.style.borderBottom = "2px solid #ff4a4a";
		errors.push('<div class="error"	><p>Username between 3 and 25 characters.</p></div>')
		valid = false;
	} else{
		username.style.borderBottom = "2px solid #fac864";
	}

	if(!(regexEmail.test(emailValue))){
		errors.push('<div class="error"	><p>Regular email shape.</p></div>')
		email.style.borderBottom = "2px solid #ff4a4a";
		valid = false;
	} else{
		email.style.borderBottom = "2px solid #fac864";
	}

	if(!(regexPassword.test(passwordValue))){
		errors.push('<div class="error"	><p>Password one uppercase, lowercase letter and a number.</p></div>')
		password.style.borderBottom = "2px solid #ff4a4a";
		valid = false;
	} else{
		password.style.borderBottom = "2px solid #fac864";
	}

	if((passwordValue!=passwordConfirmValue)||(passwordConfirmValue=="")){
		errors.push('<div class="error"	><p>Passwords must match.</p></div>')
		passwordConfirm.style.borderBottom = "2px solid #ff4a4a";
		valid = false;
	} else{
		passwordConfirm.style.borderBottom = "2px solid #fac864";
	}

	for(element of errors){
		document.getElementById('registerErrorsBlock').innerHTML += element;
	}
	return valid;
}
function proveraLogin(){
	var errors=[];
	document.getElementById('loginErrorsBlock').innerHTML = '';
	valid= true;

	var username = document.getElementById("usernameLogin"),
		password = document.getElementById("passwordLogin");

	var usernameValue = document.getElementById("usernameLogin").value.trim(),
		passwordValue = document.getElementById("passwordLogin").value.trim();
	var dugmeLogin = document.getElementById('dugmeLogin');

	var regexUser = /^(?=.*[A-z])(?!\s)[A-z\d\.]{3,25}$/,
		regexPassword = /^(?=.*[a-z])(?=.*\d)(?=.*[A-Z]).{3,30}$/;

	if(!(regexUser.test(usernameValue))){
		username.style.borderBottom = "2px solid #ff4a4a";
		errors.push('<div class="error"	><p>Username between 3 and 25 characters.</p></div>')
		valid = false;
	} else{
		username.style.borderBottom = "2px solid #fac864";
	}
	if(!(regexPassword.test(passwordValue))){
		password.style.borderBottom = "2px solid #ff4a4a";
		errors.push('<div class="error"><p>Password one uppercase, lowercase letter and a number.</p></div>')
		valid = false;
	} else{
		password.style.borderBottom = "2px solid #fac864";
	}
	
	
	for(element of errors){
		document.getElementById('loginErrorsBlock').innerHTML += element;
	}
	return valid;
}
/**************/


/*sort and filter program*/
function sortProgram(value){
	var urlString = window.location.search;
	var urlParams = new URLSearchParams(urlString);
	var num = urlParams.get('num');

	$.ajax({
		url: "models/program/sort.php",
		method: "POST",
		dataType : "json",
		data : {
			sortProgram: 1,
			value: value,
			num: num
		},
		success: function(data){
			writeProgram(data)
		},
		error(xhr,status,error){
			console.log(xhr);
			console.log(status);
			console.log(error);
		}
	});
}
function filterProgram(value){

	$.ajax({
		url: "models/program/filter.php",
		method: "POST",
		dataType : "json",
		data : {
			stages: 1,
			value: value
		},
		success: function(data){
			writeProgram(data)
		},
		error(xhr,status,error){
			console.log(xhr);
			console.log(status);
			console.log(error);
		}
	});
}
/**************/


/*edit menu*/
function proveraMenuInsert(){
	var valid = true;
	var errors = [];
	document.getElementById('errorsMenuInsert').innerHTML = '';

	var regexTitle = /^[A-z0-9\s\.\,\-\'\"\*\/\:]{1,100}$/;
	var regexLevel = /^[\d]{1,3}$/;


	var parentSelect = document.getElementById('menuParentInsertSelect');
	var parentId = parentSelect.options[parentSelect.selectedIndex].value;

	var typeSelect = document.getElementById('typeInsertSelect');
	var type = typeSelect.options[typeSelect.selectedIndex].value;

	var name = document.getElementById('nameMenuInsert');
	var link = document.getElementById('linkMenuInsert');
	var level = document.getElementById('levelMenuInsert');

	var nameValue = name.value;
	var linkValue = link.value;
	var levelValue = level.value;

	if(!(regexTitle.test(nameValue))){
		name.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Name length min 1 and max 100.</p></div>');
		valid = false;
	} else{
		name.style.borderBottom = "2px solid #383838";
	}
	if(!(regexTitle.test(linkValue))){
		link.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Link length min 1 and max 100.</p></div>');
		valid = false;
	} else{
		link.style.borderBottom = "2px solid #383838";
	}
	if(!(regexLevel.test(levelValue))){
		level.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Level can contain only numbers.</p></div>');
		valid = false;
	} else{
		level.style.borderBottom = "2px solid #383838";
	}
	if(type==0){
		typeSelect.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Type has to be chosen.</p></div>');
		valid = false;
	} else{
		typeSelect.style.borderBottom = "2px solid #383838";
	}

	for(element of errors){
		document.getElementById('errorsMenuInsert').innerHTML += element;
	}

	return valid;
}
function proveraMenuUpdate(){
	var valid = true;
	var errors = [];
	document.getElementById('errorsMenuUpdate').innerHTML = '';

	var regexTitle = /^[A-z0-9\s\.\,\-\'\"\*\/\:]{1,100}$/;
	var regexLevel = /^[\d]{1,3}$/;

	var menuSelect = document.getElementById('menuUpdateSelect');
	var menuId = menuSelect.options[menuSelect.selectedIndex].value;

	var parentSelect = document.getElementById('menuParentUpdateSelect');
	var parentId = parentSelect.options[parentSelect.selectedIndex].value;

	var typeSelect = document.getElementById('typeMenuUpdateSelect');
	var type = typeSelect.options[typeSelect.selectedIndex].value;

	var name = document.getElementById('nameMenuUpdate');
	var link = document.getElementById('linkMenuUpdate');
	var level = document.getElementById('levelMenuUpdate');

	var nameValue = name.value;
	var linkValue = link.value;
	var levelValue = level.value;

	if(menuId==0){
		menuSelect.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Menu has to be chosen.</p></div>');
		valid = false;
	} else{
		menuSelect.style.borderBottom = "2px solid #383838";
	}
	if(!(regexTitle.test(nameValue))){
		name.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Name length min 1 and max 100.</p></div>');
		valid = false;
	} else{
		name.style.borderBottom = "2px solid #383838";
	}
	if(!(regexTitle.test(linkValue))){
		link.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Link length min 1 and max 100.</p></div>');
		valid = false;
	} else{
		link.style.borderBottom = "2px solid #383838";
	}
	if(!(regexLevel.test(levelValue))){
		level.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Level can contain only numbers.</p></div>');
		valid = false;
	} else{
		level.style.borderBottom = "2px solid #383838";
	}
	if(type==0){
		typeSelect.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Type has to be chosen.</p></div>');
		valid = false;
	} else{
		typeSelect.style.borderBottom = "2px solid #383838";
	}

	for(element of errors){
		document.getElementById('errorsMenuUpdate').innerHTML += element;
	}

	return valid;
}
function proveraMenuDelete(){
	var valid = true;
	var errors = [];
	document.getElementById('errorsMenuDelete').innerHTML = '';

	var menuSelect = document.getElementById('menuDeleteSelect');
	var menuId = menuSelect.options[menuSelect.selectedIndex].value;

	if(menuId==0){
		menuSelect.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Menu has to be chosen.</p></div>');
		valid = false;
	} else{
		menuSelect.style.borderBottom = "2px solid #383838";
	}

	for(element of errors){
		document.getElementById('errorsMenuDelete').innerHTML += element;
	}

	return valid;
}
/**********/


/*order ticket/program*/
function proveraOrderTicket(){
	var valid = true;
	var errors = [];
	document.getElementById('errorsOrderTicket').innerHTML = '';

	var orderTicketSelect = document.getElementById('orderTicketSelect');
	var numOfTickets = orderTicketSelect.options[orderTicketSelect.selectedIndex].value;

	if(numOfTickets==0){
		orderTicketSelect.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Number of tickets has to be chosen.</p></div>');
		valid = false;
	} else{
		orderTicketSelect.style.borderBottom = "2px solid #383838";
	}

	for(element of errors){
		document.getElementById('errorsOrderTicket').innerHTML += element;
	}
	return valid;
}
/**************/


/*edit stage*/
function proveraStageInsert(){
	var valid = true;
	var errors = [];
	document.getElementById('errorsStageInsert').innerHTML = '';

	var regexName = /^[A-z\s]{1,110}$/;
	var regexCapacity = /^[\d]{1,3}$/;
	var regexDesc = /^.{1,1500}$/;

	var name = document.getElementById('nameStageInsert');
	var capacity = document.getElementById('capacityInsert');
	var fileBlock = document.getElementById('stagePhotoInsert');
	var desc = document.getElementById('descriptionStageInsert');
	var file = document.getElementById('stagePhotoInsert').files[0];

	var nameValue = name.value;
	var capacityValue = capacity.value;
	var descValue = desc.value;

	if(!(regexName.test(nameValue))){
		name.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Name letters, length min 1 and max 110.</p></div>');
		valid = false;
	} else{
		name.style.borderBottom = "2px solid #383838";
	}
	if(!(regexDesc.test(descValue))){
		desc.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Description 1-1500 characters.</p></div>');
		valid = false;
	} else{
		desc.style.borderBottom = "2px solid #383838";
	}
	if(!(regexCapacity.test(capacityValue))){
		capacity.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Capacity length min 1 and max 100.</p></div>');
		valid = false;
	} else{
		capacity.style.borderBottom = "2px solid #383838";
	}


	if(file){
		var fileName = file.name;
		var fileType = file.type;
		var fileSize = file.size;

		var fileData = new FormData();
		fileData.append('stagePhoto',file);

		if(fileSize>2002000){
			errors.push('<div class="error"><p>Image has to be smaller than 2MB.</p></div>');
			valid = false;
			fileBlock.style.borderBottom = "2px solid #cf2525";
		}

		if((fileType.indexOf('png')==-1)&&(fileType.indexOf('jpg')==-1)&&(fileType.indexOf('jpeg')==-1)){
			errors.push('<div class="error"><p>Image extension has to be jpg, jpeg or png.</p></div>');
			valid = false;
			fileBlock.style.borderBottom = "2px solid #cf2525";
		}
	}
	else{
		errors.push('<div class="error"><p>File has to be chosen.</p></div>');
		valid = false;
		fileBlock.style.borderBottom = "2px solid #cf2525";
	}

	


	for(element of errors){
		document.getElementById('errorsStageInsert').innerHTML += element;
	}

	return valid;
}
function proveraStageUpdate(){
	var valid = true;
	var errors = [];
	document.getElementById('errorsStageUpdate').innerHTML = '';

	var regexName = /^[A-z\s]{1,110}$/;
	var regexCapacity = /^[\d]{1,4}$/;
	var regexDesc = /^.{1,1500}$/;

	var name = document.getElementById('nameStageUpdate');
	var capacity = document.getElementById('capacityUpdate');
	var stage = document.getElementById('stageUpdateSelect');
	var fileBlock = document.getElementById('stagePhotoUpdate');
	var desc = document.getElementById('descriptionStageUpdate');
	var file = document.getElementById('stagePhotoUpdate').files[0];

	var nameValue = name.value;
	var capacityValue = capacity.value;
	var stageValue = stage.options[stage.selectedIndex].value;
	var descValue = desc.value;


	if(!(regexName.test(nameValue))){
		name.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Name letters, length min 1 and max 110.</p></div>');
		valid = false;
	} else{
		name.style.borderBottom = "2px solid #383838";
	}
	if(!(regexDesc.test(descValue))){
		desc.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Description 1-1500 characters.</p></div>');
		valid = false;
	} else{
		desc.style.borderBottom = "2px solid #383838";
	}
	if(!(regexCapacity.test(capacityValue))){
		capacity.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Capacity between 1-4 digits.</p></div>');
		valid = false;
	} else{
		capacity.style.borderBottom = "2px solid #383838";
	}
	if(stageValue==0){
		stage.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Stage has to be chosen.</p></div>');
		valid = false;
	} else{
		stage.style.borderBottom = "2px solid #383838";
	}


	if(file){
		var fileName = file.name;
		var fileType = file.type;
		var fileSize = file.size;

		var fileData = new FormData();
		fileData.append('stagePhoto',file);

		if(fileSize>2002000){
			errors.push('<div class="error"><p>Image has to be smaller than 2MB.</p></div>');
			valid = false;
			fileBlock.style.borderBottom = "2px solid #cf2525";
		}

		if((fileType.indexOf('png')==-1)&&(fileType.indexOf('jpg')==-1)&&(fileType.indexOf('jpeg')==-1)){
			errors.push('<div class="error"><p>Image extension has to be jpg, jpeg or png.</p></div>');
			valid = false;
			fileBlock.style.borderBottom = "2px solid #cf2525";
		}
	}

	for(element of errors){
		document.getElementById('errorsStageUpdate').innerHTML += element;
	}

	return valid;
}
function proveraStageDelete(){
	var valid = true;
	var errors = [];
	document.getElementById('errorsStageDelete').innerHTML = '';

	var stage = document.getElementById('stageDeleteSelect');

	var stageValue = stage.options[stage.selectedIndex].value;

	if(stageValue==0){
		stage.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Stage has to be chosen.</p></div>');
		valid = false;
	} else{
		stage.style.borderBottom = "2px solid #383838";
	}

	for(element of errors){
		document.getElementById('errorsStageDelete').innerHTML += element;
	}

	return valid;
}
/************/

/*edit program*/
function proveraProgramInsert(){
	var valid = true;
	var errors = [];
	document.getElementById('errorsProgramInsert').innerHTML = '';

	var regexName = /^.{1,110}$/;
	var regexDesc = /^.{1,1500}$/;
	var regexPrice = /^[\d]{1,4}$/;

	var name = document.getElementById('nameProgramInsert');
	var desc = document.getElementById('descProgramInsert');
	var stage = document.getElementById('programStageInsertSelect');
	var artist = document.getElementById('artistProgramInsertSelect');
	var price = document.getElementById('priceProgramInsert');
	var date = document.getElementById('dateProgramInsert');
	var time = document.getElementById('timeProgramInsert');
	var fileBlock = document.getElementById('programPhotoInsert');
	var file = document.getElementById('programPhotoInsert').files[0];
	
	
	var priceValue = price.value;
	var nameValue = name.value;
	var descValue = desc.value;
	var artistValue = artist.options[artist.selectedIndex].value;
	var dateValue = date.value;
	var timeValue = time.value;
	var stageId = stage.options[stage.selectedIndex].value;

	if(!(regexName.test(nameValue))){
		name.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Name length min 1 and max 110.</p></div>');
		valid = false;
	} else{
		name.style.borderBottom = "2px solid #383838";
	}
	if(!(regexDesc.test(descValue))){
		desc.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Description length min 1 and max 1500.</p></div>');
		valid = false;
	} else{
		desc.style.borderBottom = "2px solid #383838";
	}
	if(artistValue==0){
		artist.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Artist not chosen.</p></div>');
		valid = false;
	} else{
		artist.style.borderBottom = "2px solid #383838";
	}
	if(stageId==0){
		stage.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Stage not selected.</p></div>');
		valid = false;
	} else{
		stage.style.borderBottom = "2px solid #383838";
	}
	if(!(regexPrice.test(priceValue))){
		price.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Price 1-4 digits.</p></div>');
		valid = false;
	} else{
		price.style.borderBottom = "2px solid #383838";
	}
	if(!dateValue){
		date.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Date not selected.</p></div>');
		valid = false;
	} else{
		date.style.borderBottom = "2px solid #383838";
	}
	if(!timeValue){
		time.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Time not selected.</p></div>');
		valid = false;
	} else{
		time.style.borderBottom = "2px solid #383838";
	}

	if(file){
		var fileName = file.name;
		var fileType = file.type;
		var fileSize = file.size;

		var fileData = new FormData();
		fileData.append('stagePhoto',file);

		if(fileSize>2002000){
			errors.push('<div class="error"><p>Image has to be smaller than 2MB.</p></div>');
			valid = false;
			fileBlock.style.borderBottom = "2px solid #cf2525";
		}

		if((fileType.indexOf('png')==-1)&&(fileType.indexOf('jpg')==-1)&&(fileType.indexOf('jpeg')==-1)){
			errors.push('<div class="error"><p>Image extension has to be jpg, jpeg or png.</p></div>');
			valid = false;
			fileBlock.style.borderBottom = "2px solid #cf2525";
		}
	}
	else{
		errors.push('<div class="error"><p>File has to be chosen.</p></div>');
		valid = false;
		fileBlock.style.borderBottom = "2px solid #cf2525";
	}

	for(element of errors){
		document.getElementById('errorsProgramInsert').innerHTML += element;
	}

	return valid;
}
function proveraProgramUpdate(){
	var valid = true;
	var errors = [];
	document.getElementById('errorsProgramUpdate').innerHTML = '';

	var regexName = /^.{1,110}$/;
	var regexDesc = /^.{1,1500}$/;

	var program = document.getElementById('idProgramUpdate');
	var name = document.getElementById('nameProgramUpdate');
	var desc = document.getElementById('descProgramUpdate');
	var stage = document.getElementById('programStageUpdateSelect');
	var artist = document.getElementById('artistProgramUpdateSelect');
	var date = document.getElementById('dateProgramUpdate');
	var time = document.getElementById('timeProgramUpdate');
	var fileBlock = document.getElementById('programPhotoUpdate');
	var file = document.getElementById('programPhotoUpdate').files[0];
	
	var programId = program.options[program.selectedIndex].value;
	var nameValue = name.value;
	var descValue = desc.value;
	var artistValue = artist.options[artist.selectedIndex].value;
	var dateValue = date.value;
	var timeValue = time.value;
	var stageId = stage.options[stage.selectedIndex].value;


	if(programId==0){
		program.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Program not selected.</p></div>');
		valid = false;
	} else{
		program.style.borderBottom = "2px solid #383838";
	}
	if(!(regexName.test(nameValue))){
		name.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Name length min 1 and max 110.</p></div>');
		valid = false;
	} else{
		name.style.borderBottom = "2px solid #383838";
	}
	if(!(regexDesc.test(descValue))){
		desc.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Description length min 1 and max 1500.</p></div>');
		valid = false;
	} else{
		desc.style.borderBottom = "2px solid #383838";
	}
	if(artistValue==0){
		artist.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Artist not chosen.</p></div>');
		valid = false;
	} else{
		artist.style.borderBottom = "2px solid #383838";
	}
	if(stageId==0){
		stage.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Stage not selected.</p></div>');
		valid = false;
	} else{
		stage.style.borderBottom = "2px solid #383838";
	}
	if(!dateValue){
		date.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Date not selected.</p></div>');
		valid = false;
	} else{
		date.style.borderBottom = "2px solid #383838";
	}
	if(!timeValue){
		time.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Time not selected.</p></div>');
		valid = false;
	} else{
		time.style.borderBottom = "2px solid #383838";
	}

	if(file){
		var fileName = file.name;
		var fileType = file.type;
		var fileSize = file.size;

		var fileData = new FormData();
		fileData.append('stagePhoto',file);

		if(fileSize>2002000){
			errors.push('<div class="error"><p>Image has to be smaller than 2MB.</p></div>');
			valid = false;
			fileBlock.style.borderBottom = "2px solid #cf2525";
		}

		if((fileType.indexOf('png')==-1)&&(fileType.indexOf('jpg')==-1)&&(fileType.indexOf('jpeg')==-1)){
			errors.push('<div class="error"><p>Image extension has to be jpg, jpeg or png.</p></div>');
			valid = false;
			fileBlock.style.borderBottom = "2px solid #cf2525";
		}
	}

	for(element of errors){
		document.getElementById('errorsProgramUpdate').innerHTML += element;
	}

	return valid;
}
function proveraProgramDelete(){
	var valid = true;
	var errors = [];
	document.getElementById('errorsProgramDelete').innerHTML = '';

	var program = document.getElementById('nameProgramDelete');

	var programValue = program.options[program.selectedIndex].value;

	if(programValue==0){
		program.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Program has to be chosen.</p></div>');
		valid = false;
	} else{
		program.style.borderBottom = "2px solid #383838";
	}

	for(element of errors){
		document.getElementById('errorsProgramDelete').innerHTML += element;
	}

	return valid;
}
/*************/


/*contact*/
function proveraContact(){
	document.getElementById('contactError').innerHTML = "";
	valid= true;
	var errors = [];

	var name = document.getElementById("fullNameContact");
	var subject = document.getElementById("subjectContact");
	var message = document.getElementById("messageContact");

	var nameValue = name.value ;
	var subjectValue = subject.value;
	var messageValue = message.value;
	console.log(messageValue)

	var regexFullName = /^[A-Z][a-z]{2,20}(\s[A-Z][a-z]{2,20})+$/;
	var regexSubject = /^[\w\d]{1,30}$/;
	var regexMessage = /^.{5,250}$/;

	if(!(regexFullName.test(nameValue))){
		name.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Name in invalid format.</p></div>')
		valid = false;
	} else{
		name.style.borderBottom = "2px solid black";
	}
	if(!(regexSubject.test(subjectValue))){
		subject.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Subject in invalid format.</p></div>')
		valid = false;
	} else{
		subject.style.borderBottom = "2px solid black";
	}
	if(!(regexMessage.test(messageValue))){
		message.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Message min 5 and max 250 characters.</p></div>')
		valid = false;
	} else{
		message.style.borderBottom = "2px solid black";
	}
	
	
	if(errors){
		for(i=0; i<errors.length; i++){
			document.getElementById('contactError').innerHTML += errors[i];
		}
	}
	
	return valid;
}
/*********/

/*download excel*/
function dlExcel(){
	$.ajax({
		url: "models/dlExcel.php",
		method: "POST",
		success: function(data){
			var block = document.getElementById('excelResult');
			if(data=='success'){
				block.innerHTML = "<p style='color:#fac864'>Download successful.</p><br>";
			}
			else{
				block.innerHTML = "<p style='color:red'>Download failed</p><br>";
			}
			console.log(data)
		},
		error(xhr,status,error){
			console.log(xhr);
			console.log(status);
			console.log(error);
		}
	});
}
/****************/




/*edit News*/
function proveraNewsInsert(){
	var valid = true;
	var errors = [];
	document.getElementById('errorsNewsInsert').innerHTML = '';

	var regexName = /^[A-z\s]{1,110}$/;
	var regexDesc = /^.{1,1500}$/;

	var title = document.getElementById('titleNewsInsert');
	var text = document.getElementById('textInsertArea');
	var fileBlock = document.getElementById('photoNewsInsert');


	var titleValue = title.value;
	var textValue = text.value;
	var file = document.getElementById('photoNewsInsert').files[0];


	if(!(regexName.test(titleValue))){
		title.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Title letters, length min 1 and max 110.</p></div>');
		valid = false;
	} else{
		title.style.borderBottom = "2px solid #383838";
	}
	if(!(regexDesc.test(textValue))){
		text.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Text 1-1500 characters.</p></div>');
		valid = false;
	} else{
		text.style.borderBottom = "2px solid #383838";
	}

	if(file){
		var fileName = file.name;
		var fileType = file.type;
		var fileSize = file.size;

		if(fileSize>2002000){
			errors.push('<div class="error"><p>Image has to be smaller than 2MB.</p></div>');
			valid = false;
			fileBlock.style.borderBottom = "2px solid #cf2525";
		}

		if((fileType.indexOf('png')==-1)&&(fileType.indexOf('jpg')==-1)&&(fileType.indexOf('jpeg')==-1)){
			errors.push('<div class="error"><p>Image extension has to be jpg, jpeg or png.</p></div>');
			valid = false;
			fileBlock.style.borderBottom = "2px solid #cf2525";
		}
	}
	else{
		errors.push('<div class="error"><p>File has to be chosen.</p></div>');
		valid = false;
		fileBlock.style.borderBottom = "2px solid #cf2525";
	}

	for(element of errors){
		document.getElementById('errorsNewsInsert').innerHTML += element;
	}

	return valid;
}
function proveraNewsUpdate(){
	var valid = true;
	var errors = [];
	document.getElementById('errorsNewsUpdate').innerHTML = '';

	var regexName = /^[A-z\s]{1,110}$/;
	var regexDesc = /^.{1,1500}$/;

	var title = document.getElementById('titleNewsUpdate');
	var text = document.getElementById('textUpdateArea');


	var titleValue = title.value;
	var textValue = text.value;


	if(!(regexName.test(titleValue))){
		title.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Title letters, length min 1 and max 110.</p></div>');
		valid = false;
	} else{
		title.style.borderBottom = "2px solid #383838";
	}
	if(!(regexDesc.test(textValue))){
		text.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>Text 1-1500 characters.</p></div>');
		valid = false;
	} else{
		text.style.borderBottom = "2px solid #383838";
	}

	for(element of errors){
		document.getElementById('errorsNewsUpdate').innerHTML += element;
	}

	return valid;
}
function proveraNewsDelete(){
	var valid = true;
	var errors = [];
	document.getElementById('errorsNewsDelete').innerHTML = '';

	var news = document.getElementById('newsDeleteSelect');

	var newsValue = news.options[news.selectedIndex].value;

	if(newsValue==0){
		news.style.borderBottom = "2px solid #cf2525";
		errors.push('<div class="error"><p>News has to be chosen.</p></div>');
		valid = false;
	} else{
		news.style.borderBottom = "2px solid #383838";
	}

	for(element of errors){
		document.getElementById('errorsNewsDelete').innerHTML += element;
	}

	return valid;
}
/************/
