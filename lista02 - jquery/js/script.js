$(function() {
    // Questão 1
    // A
    $(".module")
    
    // B
    $("#myListItem")
    $("#myList:eq(2)")

    // C
    $("label[for='q']")

    // D
    $("[alt]")

    // E
    $("#fruits tbody tr:even")

    // F
    $("h2:contains('B'):contains('e')")

    // G
    $("#myList li:not(#myList li:['id = 'myListItem''])")

    // H
    $("img:last, h3:last")

    // I
    $("#myList li[class='current bar'] ~ li")

    // Questão 2
    // A
    for (var i=8; i<13; i++) {
        $("#myList").append(`<li>List item ${i}</li>`)
    }

    // B
    $("#myList li:odd").remove()

    // C
    $("div[class='module']:last").append(`
        <div class='module'>
            <img src="images/fruit.jpg">
        </div>
    `)

    // Questão 3
    // A
    $("img[alt]").each(function() {
        console.log($(this));
    });

    // B e C
    $("input[type='text']").closest("form").addClass("template");

    // D, E, F e G
    $("#myList li.current").removeClass("current").next().addClass("current");

    // H
    $("#specials h2").text("Promoções").parent().find("option:contains('Friday')").text("Dimitri");

    // I
    $("#slideshow li:first-child").addClass("current").siblings().addClass("disabled");
})

