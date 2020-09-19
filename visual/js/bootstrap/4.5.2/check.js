
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("pro");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
