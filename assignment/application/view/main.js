window.onload = () => {
    const but_switchers = document.querySelectorAll('[data-switcher]');

    for (let i = 0; i < but_switchers.length; i++) {
        const but_switcher = but_switchers[i];
        const page_id = but_switcher.dataset.but;

        but_switcher.addEventListener('click', () => {
            document.querySelector('.navbar-nav .but.is-active').classList.remove('is-active');
            but_switcher.parentNode.classList.add('is-active');

            SwitchPage(page_id);
        });
    }
}

function SwitchPage (page_id) {
    console.log(page_id);

    const current_page = document.querySelector('.pages .page.is-active');
    current_page.classList.remove('is-active');

    const next_page = document.querySelector(`.pages .page[data-page="${page_id}"]`);
    next_page.classList.add('is-active');
}
