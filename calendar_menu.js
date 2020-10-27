$("div").each(function () {
    $(this).click(function () {
        if (this.className === "CalJan") {
            $(".Jan").toggleClass("Hide");
        } else if (this.className === "CalFeb") {
            $(".Feb").toggleClass("Hide");
        } else if (this.className === "CalMar") {
            $(".Mar").toggleClass("Hide");
        } else if (this.className === "CalApr") {
            $(".Apr").toggleClass("Hide");
        } else if (this.className === "CalMay") {
            $(".May").toggleClass("Hide");
        } else if (this.className === "CalJun") {
            $(".Jun").toggleClass("Hide");
        } else if (this.className === "CalJul") {
            $(".Jul").toggleClass("Hide");
        } else if (this.className === "CalAug") {
            $(".Aug").toggleClass("Hide");
        } else if (this.className === "CalSep") {
            $(".Sep").toggleClass("Hide");
        } else if (this.className === "CalOct") {
            $(".Oct").toggleClass("Hide");
        } else if (this.className === "CalNov") {
            $(".Nov").toggleClass("Hide");
        } else if (this.className === "CalDec") {
            $(".Dec").toggleClass("Hide");
        }
    });
});

$("a").on("click", function () {
    $("input").toggleClass("Hide");
});

$("input").addClass("Hide");

$("input").on("click", function () {
    window.location = "DayCalendarScheduleViewHtml.html";
});

$("div").each(function () {
    if (this.className != 'Jan') {
        $(this).addClass("Hide");
    }
    if (this.className.substring(0, 3) == 'Cal') {
        $(this).removeClass("Hide");
    }
});