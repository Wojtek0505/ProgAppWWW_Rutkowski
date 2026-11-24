$(document).ready(function () {
    const prefersReducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    );

    $.fx.off = prefersReducedMotion.matches;

    const animationA = $("#animation-a");

    let isExpanded = false;

    animationA.on("click", function () {
        isExpanded = !isExpanded;

        animationA.stop(true, false).animate({
            width: isExpanded ? 240 : 160,
            height: isExpanded ? 130 : 90
        }, 300);

        animationA.attr("aria-pressed", isExpanded);
    });

    const animationB = $("#animation-b");

    let isHovered = false;
    let isFocused = false;

    function updateAnimationB() {
        const shouldExpand = isHovered || isFocused;

        animationB.stop(true, false).animate({
            width: shouldExpand ? 220 : 160,
            height: shouldExpand ? 120 : 90
        }, 300);
    }

    animationB.on("mouseenter", function () {
        isHovered = true;
        updateAnimationB();
    });

    animationB.on("mouseleave", function () {
        isHovered = false;
        updateAnimationB();
    });

    animationB.on("focus", function () {
        isFocused = true;
        updateAnimationB();
    });

    animationB.on("blur", function () {
        isFocused = false;
        updateAnimationB();
    });

    const animationC = $("#animation-c");

    let stepsC = 0;

    animationC.on("click", function () {
        if (animationC.is(":animated")) {
            return;
        }

        if (stepsC >= 5) {
            return;
        }

        stepsC++;

        animationC.animate({
            width: 160 + stepsC * 20,
            height: 90 + stepsC * 10
        }, 300);

        $("#animation-status").text(
            "Liczba powiększeń: " + stepsC
        );
    });

    $("#animation-reset").on("click", function () {
        animationA.stop(true, false).css({
            width: 160,
            height: 90
        });

        animationC.stop(true, false).css({
            width: 160,
            height: 90
        });

        isExpanded = false;
        animationA.attr("aria-pressed", false);

        stepsC = 0;
        $("#animation-status").text("Liczba powiększeń: 0");
    });

    const serverCheckButton = $("#server-check-button");
    const serverCheckResult = $("#server-check-result");

    serverCheckButton.on("click", function () {
        serverCheckResult.text("Sprawdzanie serwera...");
        serverCheckButton.prop("disabled", true);

        $.ajax({
            url: "status.php",
            method: "GET",
            dataType: "text",
            timeout: 5000
        })
            .done(function (response) {
                serverCheckResult.text(response);
            })
            .fail(function () {
                serverCheckResult.text("Nie udało się połączyć z serwerem.");
            })
            .always(function () {
                serverCheckButton.prop("disabled", false);
            });
    });
});

