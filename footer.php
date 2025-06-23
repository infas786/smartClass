<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
    <!--begin::Container-->
    <div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted fw-semibold me-1">2025&copy;</span>
            <a href="#" target="_blank" class="text-gray-800 text-hover-primary">SchoolCommunity</a>
        </div>
        <!--end::Copyright-->
        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
            <li class="menu-item">
                <a href="#" target="_blank" class="menu-link px-2">About</a>
            </li>
            <li class="menu-item">
                <a href="#" target="_blank" class="menu-link px-2">Support</a>
            </li>
            <li class="menu-item">
                <a href="#" target="_blank" class="menu-link px-2">Purchase</a>
            </li>
        </ul>
        <!--end::Menu-->
    </div>
    <!--end::Container-->
</div>


<!--begin::Javascript-->
<script>
    function mandatoryFields(formSelector) {
    let isValid = true; // Assume all fields are valid

    $(`${formSelector} .mandatory`).each(function() {
        var fieldValue = $(this).val().trim();
        var parentBlock = $(this).closest('.input-block'); // Target the overall block

        var isInputGroup = $(this).closest('.input-group').length > 0;
        var errorContainer = isInputGroup ? parentBlock : $(this).parent(); // Choose where to append the error message

        errorContainer.find(".errormsgmn").remove(); // Remove old errors

        if (fieldValue === '') {
            $(this).addClass('error-field').removeClass('valid-field'); // Add red border
            errorContainer.append("<div class='error-msg errormsgmn'>This Field Is Required</div>");
            isValid = false; // Mark form as invalid
        } else {
            $(this).addClass('valid-field').removeClass('error-field'); // Add green border
        }
    });

    return isValid; // Return true if all fields are valid, false if any are empty
}

</script>
<script>
    var hostUrl = "/metronic8/demo2/assets/";
    </script>
					<!--begin::Global Javascript Bundle(used by all pages)-->
					<script src="assets/plugins/global/plugins.bundle.js"></script>
					<script src="assets/js/scripts.bundle.js"></script>
					<!--end::Global Javascript Bundle-->
					<!--begin::Vendors Javascript(used by this page)-->
					<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
					<script src="../../lib/5/index.js"></script>
					<script src="../../lib/5/xy.js"></script>
					<script src="../../lib/5/percent.js"></script>
					<script src="../../lib/5/radar.js"></script>
					<script src="../../lib/5/themes/Animated.js"></script>
					<script src="../../lib/5/map.js"></script>
					<script src="../../lib/5/geodata/worldLow.js"></script>
					<script src="../../lib/5/geodata/continentsLow.js"></script>
					<script src="../../lib/5/geodata/usaLow.js"></script>
					<script src="../../lib/5/geodata/worldTimeZonesLow.js"></script>
					<script src="../../lib/5/geodata/worldTimeZoneAreasLow.js"></script>
					<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
					<!--end::Vendors Javascript-->
					<!--begin::Custom Javascript(used by this page)-->
					<script src="assets/js/widgets.bundle.js"></script>
					<script src="assets/js/custom/widgets.js"></script>
					<script src="assets/js/custom/apps/chat/chat.js"></script>
					<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
					<script src="assets/js/custom/utilities/modals/create-app.js"></script>
					<script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
					<script src="assets/js/custom/utilities/modals/users-search.js"></script>
                    
					<!--end::Custom Javascript-->
					<!--end::Javascript-->
					<!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </body>
        <!--end::Body-->
        
        </html>
        <!--begin::Footer-->