$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    var actions = $("table td:first-child").html();
    $(".add-new").click(function() {
        $(this).attr("disabled", "disabled");
        var index = $("table tbody tr:first-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="name" id="name" placeholder="Project name (Ex CodeCamp.ma)" ></td>' +
            '<td><textarea type="text" class="form-control" name="description" id="description" placeholder="Decription (Ex Moroccan web experts community. An Initiative to highlight porductivity tools for entroponeurs, moroccan success stories, modern carer paths and informational technologies.)" ></textarea></td>' +
            '<td><input type="text" class="form-control" name="link" id="link" placeholder="Link (Ex https://www.codecamp.ma or FB.com/CodeCamp.ma)"  ></td>' +
            '<td><input type="text" class="form-control" name="release" id="release" placeholder="Release Year (Ex 2020)" ></td>' +
            '<td>' + actions + '</td>' +
            '</tr>';
        $("table").append(row);
        $("table tbody tr").eq(index + 1).find(".add").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
    // Add row on add button click
    $(document).on("click", ".add", function() {
        var empty = false;
        var input = $(this).parents("tr").find('input[type="text"], textarea[type="text"]');
        input.each(function() {
            if (!$(this).val()) {
                $(this).addClass("error");
                empty = true;
            } else {
                $(this).removeClass("error");
            }
        });
        $(this).parents("tr").find(".error").first().focus();
        if (!empty) {

            $(this).parents("tr").find(".add").toggle();
            $(".add-new").removeAttr("disabled");
        }
    });

    // Delete row on delete button click
    $(document).on("click", ".delete", function() {
        $(this).parents("tr").remove();
        $(".add-new").removeAttr("disabled");
    });
});