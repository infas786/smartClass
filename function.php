<script>
            function showAlert(message, type, autogo) {
                let x = Math.floor(Math.random() * (99999 - 10000 + 1)) + 10000;

                // Define CSS classes based on the alert type
                let alertClass;
                switch (type) {
                    case 'success':
                        alertClass = 'alert-success';
                        break;
                    case 'warning':
                        alertClass = 'alert-warning';
                        break;
                    case 'error':
                        alertClass = 'alert-danger';
                        break;
                    case 'info':
                        alertClass = 'alert-info';
                        break;
                    default:
                        alertClass = 'alert-primary'; // Default to primary if type is not recognized
                }

                // Append the alert with proper styling
                $('.alertShow').append(`
                    <div class="alert border-0 alert-dismissible ${alertClass} ${x} fade show" role="alert">
                        <strong>${message}</strong>
                    </div>
                `);

                $('.' + x).fadeIn();

                if (autogo === true) {
                    setTimeout(function() {
                        $('.' + x).fadeOut();
                    }, 5000);
                }
            }

            document.addEventListener("DOMContentLoaded", function() {
                const currentPath = window.location.pathname; // Get the current path
                const sidebarLinks = document.querySelectorAll(".sidebar-vertical li a");

                sidebarLinks.forEach(link => {
                    // Remove any existing active and subdrop classes
                    link.classList.remove("active");

                    // Check if the link's href matches the current path
                    if (link.href && link.href.includes(currentPath)) {
                        link.classList.add("active"); // Add 'active' and 'subdrop' to the matching link

                        const submenuParent = link.closest(".submenu");
                        if (submenuParent) {
                            const parentLink = submenuParent.querySelector("a"); // The submenu's parent <a>
                            parentLink.classList.add("active", "subdrop");

                            // Ensure the submenu itself is marked open
                            submenuParent.querySelector("ul li a").classList.add("active");

                            // Remove 'subdrop' from other submenus
                            document.querySelectorAll(".submenu ul li a").forEach(submenu => {
                                if (!submenuParent.contains(submenu)) {
                                    submenu.classList.remove("active");
                                }
                            });

                            // Reset other submenu parents
                            document.querySelectorAll(".submenu > a").forEach(submenuLink => {
                                if (submenuLink !== parentLink) {
                                    submenuLink.classList.remove("subdrop");
                                }
                            });
                        }
                    }
                });
            });

            // Helper function to format date
            function formatDate(date) {
                return date.toISOString().split('T')[0]; // Returns YYYY-MM-DD
            }

            // Helper function to format time in AM/PM
            function formatTime(date) {
                const srilankaOffset = 5.5 * 60 * 60 * 1000;
                const utcTime = date.getTime() + date.getTimezoneOffset() * 60 * 1000;
                const srilankaTime = new Date(utcTime + srilankaOffset);

                let hours = srilankaTime.getHours();
                const minutes = srilankaTime.getMinutes();
                const ampm = hours >= 12 ? 'PM' : 'AM';
                hours = hours % 12 || 12;
                return `${hours}:${minutes.toString().padStart(2, '0')} ${ampm}`;
            }
        </script>

        <div class="alertShow"></div>