<?php 
	header('content-type:text/css; charset:UTF-8;');
?>

#main-container {
	position: absolute;
	top: 0;
	left: 0;

	width: 100%;
	height: 100vh;

	display: grid;
	grid-template-columns: 380px auto;
	grid-template-rows: 100%;
	grid-template-areas: 
	'nav-container menu-container'
	;
}





#nav-container {
	grid-area: nav-container;
	background-color: darkgrey;
	padding: 3%;

	display: grid;
	grid-template-rows: 130px auto 210px;
	grid-template-columns: 100%;
	grid-template-areas: 
	'nav-user'
	'nav-content'
	'nav-cart'
	;
}
#nav-user {
	grid-area: nav-user;
	background-color: red;

	display: grid;
	grid-template-columns: 67px 7px auto;
	grid-template-rows: 100%;
	grid-template-areas:
	"profile-pic . profile-desc"
	;
}
#nav-user > div {
	display: flex;
}
#profile-pic {
	grid-area: profile-pic;
	align-items: center;
}
#profile-pic > img {
	width: 90%;
	height: auto;
}
#profile-desc {
	grid-area: profile-desc;
	width: 100%;
	overflow-x: hidden;

	flex-flow: column;
	justify-content: center;
}

#nav-content {
	grid-area: nav-content;
	overflow-y: scroll;
	min-height: 100px;

	display: flex;
	flex-flow: column;
}
.nav-inner-content {
	width: auto;
	margin: 10px 20px 10px 10px;

	display: flex;
	flex-flow: row;
	align-items: center;
	justify-content: space-between;

	border-bottom: 2px solid blue;
}
.nav-inner-content img {
	width: 37px;
	height: auto;
}


#nav-cart {
	grid-area: nav-cart;
	background-color: red;
	padding: 5px;

	display: flex;
	flex-flow: column;
}
#cart-content-wrapper {
	height: 77%;
	width: 100%;

	display: flex;
	flex-flow: row;
	flex-shrink: 0;
	overflow-x: scroll;
	overflow-y: hidden;
}
.cart-content {
	width: 100%;
	height: 97%;
	margin: 0px 5px 0px 5px;
}
.cart-content img {
	width: 93px;
	height: 100%;
}
#cart-total-wrapper {
	height: auto;

	display: flex;
	justify-content: flex-end;
	align-items: center;
}





#menu-container {
	grid-area: menu-container;
	overflow-y: scroll;
	height: 100%;
	width: auto;

	display: flex;
	flex-flow: column;
	padding: 0px 23px 0px 23px;
	background-color: limegreen;
}


#menu-header {
	width: 100%;
	height: 170px;

	background-color: darkkhaki;

	display: flex;
	flex-flow: row;
	justify-content: space-between;
	align-items: center;
}
.menu-header-wrapper {
	display: flex;
	justify-content: center;
	align-items: center;
}
.menu-header-wrapper:nth-child(1) {
	width: 40%;
}
.menu-header-wrapper:nth-child(2) {
	width: 60%;

}
.menu-header-wrapper:nth-child(2) img {
	width: 47px;
}

#menu-search-input {
	height: 47px;
	width: 60%;

	font-size: 21px;

	border: none;
	border-radius: 15px;
}



#menu-books {
	width: auto;
	height: auto;

	margin-top: 20px;
	padding: 15px;

	background-color: darkred;
}
#menu-books-content-wrapper {
	width: 100%;
	height: auto;

	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
}
.book-content {
	margin: 5px 15px 5px 15px;
	padding: 5px;
	width: 170px;
	height: 280px;

	background-color: red;

	display: grid;
	grid-template-rows: 75% 25%;
	grid-template-columns: 100%;
	grid-template-areas: 
	'book-image'
	'book-name'
	;
}
.book-image {
	grid-area: book-image;
	background-color: blue;
}
.book-image img {
	width: 100%;
	height: 100%;
}
.book-name {
	grid-area: book-name;
	background-color: yellow;
}