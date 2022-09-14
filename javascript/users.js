const searchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .users-list");

searchBtn.onclick =  () =>{
    searchBar.classList.toggle('ative')
    searchBar.focus();
    searchBtn.classList.toggle('ative')
    searchBar.value = "";
}

searchBar.onkeyup = ()=>{
    let searchTerm = searchBar.value;
    if(searchTerm != ""){
        searchBar.classList.add("ative");
      }else{
        searchBar.classList.remove("ative");
      }
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/search.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            usersList.innerHTML = data;
            // if(!searchBar.classList.contains('ative')){
            //     usersList.innerHTML = data;
            // }
          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);

}

setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/users.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            // usersList.innerHTML = data;
            if(!searchBar.classList.contains("ative")){
                usersList.innerHTML = data;
              }
          }
      }
    }
    xhr.send();
  }, 500);
  