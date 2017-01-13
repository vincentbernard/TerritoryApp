/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */

function mySearchFunction() {
    document.getElementById("mySearchDropdown").classList.toggle("show");
}

function myCriteriaFunction() {
    document.getElementById("myCriteriaDropdown").classList.toggle("show");
}
function updateCriteria(searchSelection){
	switch (searchSelection) {
		case 1:
			var criteriaHTML = 
			"<a href='#'>pub1</a><a href='#'>pub2</a><a href='#'>pub3</a>";
			$("#myCriteriaDropdown").html(criteriaHTML);
			break;
		case 2:
			var criteriaHTML = 
			"<a href='#'>area1</a><a href='#'>area2</a><a href='#'>area3</a>";
			$("#myCriteriaDropdown").html(criteriaHTML);
			break;
		case 3:
			var criteriaHTML = 
			"<a href='#'>01/01/2016</a><a href='#'>02/05/2016</a><a href='#'>10/30/2016</a>";
			$("#myCriteriaDropdown").html(criteriaHTML);
			break;
		default:
			//do nothing
	}
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('#searchbtn')) {

    var dropdowns = document.getElementsByClassName("search-dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }

  if (!event.target.matches('#criteriabtn')) {

    var dropdowns = document.getElementsByClassName("criteria-dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}