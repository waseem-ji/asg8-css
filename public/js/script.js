function showModal() {
    
}

var container = document.getElementById('authentication-modal');
// container.style.display = "none";

// var legend_button = document.querySelector('.dis_legend');

// var container_displayed = false;
// container.style.display = "none";

container.addEventListener('click', function(){
        if (container.style.display == "none"){
        container.style.display = "flex";
            } else {
      container.style.display = "none";
      }
})



// function loadEditModal(id){
//       var dropDown = document.getElementById('dropdownMenuIconHorizontalButton_'+id);

//       dropDown.addEventListener('click', function(){
//             if (dropDown.style.display == "none")
//             {
//             dropDown.style.display = "block";
//                 } else {
//             dropDown.style.display = "none";
//           }

//       })
// }