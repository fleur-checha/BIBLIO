function deleteDetailConfirm(id) {
    if (confirm("Confirmez la suppression ?")) {
        window.location.href = "/list.html.twig";
    }
}