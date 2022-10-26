$(document).ready(function(){

    $("select[name='driveQuestion']").change(function(){

        var disableIt = $(this).val() == 'No' ? true : false;
        $("#vehicleType").attr("disabled", disableIt);
        $("#vehicleType").val("default");
        $("#vehicleMilesWeekly").attr("disabled", disableIt);
        $("#vehicleMilesWeekly").val("");
        $("#vehicleMilesMonthly").attr("disabled", disableIt);
        $("#vehicleMilesMonthly").val("");
        $("#vehicleMilesYearly").attr("disabled", disableIt);
        $("#vehicleMilesYearly").val("");
        
    });

    $("input[name='vehicleMilesWeekly']").change(function(){

        if ($(this).val() != '') {
            $("#vehicleMilesMonthly").attr("disabled", true);
            $("#vehicleMilesYearly").attr("disabled", true);
        } else {
            $("#vehicleMilesMonthly").attr("disabled", false);
            $("#vehicleMilesYearly").attr("disabled", false);
        }

    });

    $("input[name='vehicleMilesMonthly']").change(function(){

        if ($(this).val() != '') {
            $("#vehicleMilesWeekly").attr("disabled", true);
            $("#vehicleMilesYearly").attr("disabled", true);
        } else {
            $("#vehicleMilesWeekly").attr("disabled", false);
            $("#vehicleMilesYearly").attr("disabled", false);
        }

    });

    $("input[name='vehicleMilesYearly']").change(function(){

        if ($(this).val() != '') {
            $("#vehicleMilesWeekly").attr("disabled", true);
            $("#vehicleMilesMonthly").attr("disabled", true);
        } else {
            $("#vehicleMilesWeekly").attr("disabled", false);
            $("#vehicleMilesMonthly").attr("disabled", false);
        }

    });

    $("select[name='busQuestion']").change(function(){

        var disableIt = $(this).val() == 'No' ? true : false;
        $("#busMilesWeekly").attr("disabled", disableIt);
        $("#busMilesWeekly").val("");
        $("#busMilesMonthly").attr("disabled", disableIt);
        $("#busMilesMonthly").val("");
        $("#busMilesYearly").attr("disabled", disableIt);
        $("#busMilesYearly").val("");
        
    });

    $("input[name='busMilesWeekly']").change(function(){

        if ($(this).val() != '') {
            $("#busMilesMonthly").attr("disabled", true);
            $("#busMilesYearly").attr("disabled", true);
        } else {
            $("#busMilesMonthly").attr("disabled", false);
            $("#busMilesYearly").attr("disabled", false);
        }

    });

    $("input[name='busMilesMonthly']").change(function(){

        if ($(this).val() != '') {
            $("#busMilesWeekly").attr("disabled", true);
            $("#busMilesYearly").attr("disabled", true);
        } else {
            $("#busMilesWeekly").attr("disabled", false);
            $("#busMilesYearly").attr("disabled", false);
        }

    });

    $("input[name='busMilesYearly']").change(function(){

        if ($(this).val() != '') {
            $("#busMilesWeekly").attr("disabled", true);
            $("#busMilesMonthly").attr("disabled", true);
        } else {
            $("#busMilesWeekly").attr("disabled", false);
            $("#busMilesMonthly").attr("disabled", false);
        }

    });

    $("select[name='tramQuestion']").change(function(){

        var disableIt = $(this).val() == 'No' ? true : false;
        $("#tramMilesWeekly").attr("disabled", disableIt);
        $("#tramMilesWeekly").val("");
        $("#tramMilesMonthly").attr("disabled", disableIt);
        $("#tramMilesMonthly").val("");
        $("#tramMilesYearly").attr("disabled", disableIt);
        $("#tramMilesYearly").val("");
        
    });

    $("input[name='tramMilesWeekly']").change(function(){

        if ($(this).val() != '') {
            $("#tramMilesMonthly").attr("disabled", true);
            $("#tramMilesYearly").attr("disabled", true);
        } else {
            $("#tramMilesMonthly").attr("disabled", false);
            $("#tramMilesYearly").attr("disabled", false);
        }

    });

    $("input[name='tramMilesMonthly']").change(function(){

        if ($(this).val() != '') {
            $("#tramMilesWeekly").attr("disabled", true);
            $("#tramMilesYearly").attr("disabled", true);
        } else {
            $("#tramMilesWeekly").attr("disabled", false);
            $("#tramMilesYearly").attr("disabled", false);
        }

    });

    $("input[name='tramMilesYearly']").change(function(){

        if ($(this).val() != '') {
            $("#tramMilesWeekly").attr("disabled", true);
            $("#tramMilesMonthly").attr("disabled", true);
        } else {
            $("#tramMilesWeekly").attr("disabled", false);
            $("#tramMilesMonthly").attr("disabled", false);
        }

    });

    $("select[name='londonQuestion']").change(function(){

        var disableIt = $(this).val() == 'No' ? true : false;
        $("#londonMilesWeekly").attr("disabled", disableIt);
        $("#londonMilesWeekly").val("");
        $("#londonMilesMonthly").attr("disabled", disableIt);
        $("#londonMilesMonthly").val("");
        $("#londonMilesYearly").attr("disabled", disableIt);
        $("#londonMilesYearly").val("");
        
    });

    $("input[name='londonMilesWeekly']").change(function(){

        if ($(this).val() != '') {
            $("#londonMilesMonthly").attr("disabled", true);
            $("#londonMilesYearly").attr("disabled", true);
        } else {
            $("#londonMilesMonthly").attr("disabled", false);
            $("#londonMilesYearly").attr("disabled", false);
        }

    });

    $("input[name='londonMilesMonthly']").change(function(){

        if ($(this).val() != '') {
            $("#londonMilesWeekly").attr("disabled", true);
            $("#londonMilesYearly").attr("disabled", true);
        } else {
            $("#londonMilesWeekly").attr("disabled", false);
            $("#londonMilesYearly").attr("disabled", false);
        }

    });

    $("input[name='londonMilesYearly']").change(function(){

        if ($(this).val() != '') {
            $("#londonMilesWeekly").attr("disabled", true);
            $("#londonMilesMonthly").attr("disabled", true);
        } else {
            $("#londonMilesWeekly").attr("disabled", false);
            $("#londonMilesMonthly").attr("disabled", false);
        }

    });

    $("select[name='trainQuestion']").change(function(){

        var disableIt = $(this).val() == 'No' ? true : false;
        $("#trainMilesWeekly").attr("disabled", disableIt);
        $("#trainMilesWeekly").val("");
        $("#trainMilesMonthly").attr("disabled", disableIt);
        $("#trainMilesMonthly").val("");
        $("#trainMilesYearly").attr("disabled", disableIt);
        $("#trainMilesYearly").val("");
        
    });

    $("input[name='trainMilesWeekly']").change(function(){

        if ($(this).val() != '') {
            $("#trainMilesMonthly").attr("disabled", true);
            $("#trainMilesYearly").attr("disabled", true);
        } else {
            $("#trainMilesMonthly").attr("disabled", false);
            $("#trainMilesYearly").attr("disabled", false);
        }

    });

    $("input[name='trainMilesMonthly']").change(function(){

        if ($(this).val() != '') {
            $("#trainMilesWeekly").attr("disabled", true);
            $("#trainMilesYearly").attr("disabled", true);
        } else {
            $("#trainMilesWeekly").attr("disabled", false);
            $("#trainMilesYearly").attr("disabled", false);
        }

    });

    $("input[name='trainMilesYearly']").change(function(){

        if ($(this).val() != '') {
            $("#trainMilesWeekly").attr("disabled", true);
            $("#trainMilesMonthly").attr("disabled", true);
        } else {
            $("#trainMilesWeekly").attr("disabled", false);
            $("#trainMilesMonthly").attr("disabled", false);
        }

    });

    $("select[name='coachQuestion']").change(function(){

        var disableIt = $(this).val() == 'No' ? true : false;
        $("#coachMilesWeekly").attr("disabled", disableIt);
        $("#coachMilesWeekly").val("");
        $("#coachMilesMonthly").attr("disabled", disableIt);
        $("#coachMilesMonthly").val("");
        $("#coachMilesYearly").attr("disabled", disableIt);
        $("#coachMilesYearly").val("");
        
    });

    $("input[name='coachMilesWeekly']").change(function(){

        if ($(this).val() != '') {
            $("#coachMilesMonthly").attr("disabled", true);
            $("#coachMilesYearly").attr("disabled", true);
        } else {
            $("#coachMilesMonthly").attr("disabled", false);
            $("#coachMilesYearly").attr("disabled", false);
        }

    });

    $("input[name='coachMilesMonthly']").change(function(){

        if ($(this).val() != '') {
            $("#coachMilesWeekly").attr("disabled", true);
            $("#coachMilesYearly").attr("disabled", true);
        } else {
            $("#coachMilesWeekly").attr("disabled", false);
            $("#coachMilesYearly").attr("disabled", false);
        }

    });

    $("input[name='coachMilesYearly']").change(function(){

        if ($(this).val() != '') {
            $("#coachMilesWeekly").attr("disabled", true);
            $("#coachMilesMonthly").attr("disabled", true);
        } else {
            $("#coachMilesWeekly").attr("disabled", false);
            $("#coachMilesMonthly").attr("disabled", false);
        }

    });

    $("input[name='electricalUsageWeekly']").change(function(){

        if ($(this).val() != '') {
            $("#electricalUsageMonthly").attr("disabled", true);
            $("#electricalUsageYearly").attr("disabled", true);
        } else {
            $("#electricalUsageMonthly").attr("disabled", false);
            $("#electricalUsageYearly").attr("disabled", false);
        }

    });

    $("input[name='electricalUsageMonthly']").change(function(){

        if ($(this).val() != '') {
            $("#electricalUsageWeekly").attr("disabled", true);
            $("#electricalUsageYearly").attr("disabled", true);
        } else {
            $("#electricalUsageWeekly").attr("disabled", false);
            $("#electricalUsageYearly").attr("disabled", false);
        }

    });

    $("input[name='electricalUsageYearly']").change(function(){

        if ($(this).val() != '') {
            $("#electricalUsageWeekly").attr("disabled", true);
            $("#electricalUsageMonthly").attr("disabled", true);
        } else {
            $("#electricalUsageWeekly").attr("disabled", false);
            $("#electricalUsageMonthly").attr("disabled", false);
        }

    });

    $("input[name='gasUsageWeekly']").change(function(){

        if ($(this).val() != '') {
            $("#gasUsageMonthly").attr("disabled", true);
            $("#gasUsageYearly").attr("disabled", true);
        } else {
            $("#gasUsageMonthly").attr("disabled", false);
            $("#gasUsageYearly").attr("disabled", false);
        }

    });

    $("input[name='gasUsageMonthly']").change(function(){

        if ($(this).val() != '') {
            $("#gasUsageWeekly").attr("disabled", true);
            $("#gasUsageYearly").attr("disabled", true);
        } else {
            $("#gasUsageWeekly").attr("disabled", false);
            $("#gasUsageYearly").attr("disabled", false);
        }

    });

    $("input[name='gasUsageYearly']").change(function(){

        if ($(this).val() != '') {
            $("#gasUsageWeekly").attr("disabled", true);
            $("#gasUsageMonthly").attr("disabled", true);
        } else {
            $("#gasUsageWeekly").attr("disabled", false);
            $("#gasUsageMonthly").attr("disabled", false);
        }

    });

});