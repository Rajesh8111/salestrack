
    //Function to set focus on DOM element
    function setFocus(id){
        document.getElementById(id).focus();
    }

    //function to retrive parameter from query string
    function param(name) {
        return (location.search.split(name + '=')[1] || '').split('&')[0].replace('%20',' ');
    }