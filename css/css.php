<style type="text/css">
.galeria{
	height:400px;
}
.subCat{
	height:450px;
}
nav {
	box-shadow: none !important;
}
body {
	display: flex;
	min-height: 100vh;
	flex-direction: column;
}
main {
	flex: 1 0 auto;
}
.btnNav{
	position: fixed !important;
	z-index: 4 !important;
	left: 28px; top:28px;
}
.cuboD{

	position: absolute;
	width: 800px;
	height: 800px;
	top: 100%;
}
.cuboR{
	position: absolute;
	width: 600px;
	height: 600px;
	top: 100%;			
}
.input-field .prefix.active {
	color: <?=$color_hex?> !important;
}
input:focus:not([type]):not([readonly]) + label,
input[type="text"]:focus:not(.browser-default):not([readonly]) + label,
input[type="password"]:focus:not(.browser-default):not([readonly]) + label,
input[type="email"]:focus:not(.browser-default):not([readonly]) + label,
input[type="url"]:focus:not(.browser-default):not([readonly]) + label,
input[type="time"]:focus:not(.browser-default):not([readonly]) + label,
input[type="date"]:focus:not(.browser-default):not([readonly]) + label,
input[type="datetime"]:focus:not(.browser-default):not([readonly]) + label,
input[type="tel"]:focus:not(.browser-default):not([readonly]) + label,
input[type="number"]:focus:not(.browser-default):not([readonly]) + label,
input[type="search"]:focus:not(.browser-default):not([readonly]) + label,
textarea.materialize-textarea:focus:not(.browser-default):not([readonly]) + label{
	color: <?=$color_hex?> !important;
}
</style>