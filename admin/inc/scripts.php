<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function alert(type, msg, position='body') {
        let bs_class = (type == "success") ? "alert-success" : "alert-danger";
        let element = document.createElement("div");
        element.innerHTML = `
            <div class="alert alert ${bs_class} alert-dismissible fade show" role="alert">
                <strong class="me-3">${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;

        if(position=='body') {
            document.body.append(element);
            element.classList.add('custom-alert');
        }
        else {
            document.getElementById(position).appendChild(element);
        }

        setTimeout(remAlert, 1500);
    }

    function remAlert() {
        document.getElementsByClassName('alert')[0].remove();
    }
</script>