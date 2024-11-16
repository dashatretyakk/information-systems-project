document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.tab-link');
    const contentContainer = document.getElementById('tab-content');

    // Function to load tab content from an external HTML file
    function loadTabContent(url) {
        fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`Failed to load ${url}: ${response.statusText}`);
                }
                return response.text();
            })
            .then(html => {
                contentContainer.innerHTML = html;
            })
            .catch(error => {
                contentContainer.innerHTML = `<p>Error loading content: ${error.message}</p>`;
            });
    }

    // Load the first tab's content by default
    loadTabContent(links[0].getAttribute('href'));

    // Add event listeners to each tab link
    links.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            loadTabContent(this.getAttribute('href'));

            // Update active state for tabs
            links.forEach(link => link.classList.remove('active'));
            this.classList.add('active');
        });
    });
});

function handleDelete() {
    alert("Дія виконана!");

}
