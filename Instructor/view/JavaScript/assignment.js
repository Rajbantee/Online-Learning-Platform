function validateForm() {
        var name = document.getElementById("name").value.trim();
        var publishDate = document.getElementById("publishDate").value.trim();
        var dueDate = document.getElementById("dueDate").value.trim();
        var mark = document.getElementById("mark").value.trim();
        var isValid = true;

        if (name == '') {
            document.getElementById("nameError").textContent = "Name must be filled out";
            isValid = false;
        } else {
            document.getElementById("nameError").textContent = "";
        }

        if (publishDate == '') {
            document.getElementById("publishDateError").textContent = "Publish Date must be filled out";
            isValid = false;
        } else {
            document.getElementById("publishDateError").textContent = "";
        }

        if (dueDate == '') {
            document.getElementById("dueDateError").textContent = "Due Date must be filled out";
            isValid = false;
        } else {
            document.getElementById("dueDateError").textContent = "";
        }

        if (mark == '') {
            document.getElementById("markError").textContent = "Mark must be filled out";
            isValid = false;
        } else {
            document.getElementById("markError").textContent = "";
        }

        return isValid;
    }