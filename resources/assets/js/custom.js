
/**
 * open sidebar
 */

let bars = document.querySelectorAll('.bars');
let sideBarNav = document.querySelector('.sidebar__nav');
let content = document.querySelector('.content');
bars.forEach((e) => {
    e.addEventListener("click", function () {
        sideBarNav.classList.toggle("is-active");
        content.classList.toggle("is-active");
    })
})

/**
 * Tooltip
 */

let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
let tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

/**
 * Sub menu
 */
const subMenuItem = document.querySelectorAll("ul li.has-sub-ui");

subMenuItem.forEach((el) =>
    el.addEventListener("click", () => {
        var vh = el.children[1].scrollHeight;
        if (el.classList.contains("open")) {
            el.classList.remove("open");
            // el.children[1].classList.remove('open');
            el.children[1].style.height = 0;

        } else {
            subMenuItem.forEach((el2) => (el2.children[1].style.height = 0, el2.classList.remove("open")));
            el.classList.add("open");
            // el.children[1].classList.add('open');
            el.children[1].style.height = vh + "px";
        }
    })
);







/**
 * Easy selector helper function
 */
const select = (el, all = false) => {
    el = el.trim()
    if (all) {
        return [...document.querySelectorAll(el)]
    } else {
        return document.querySelector(el)
    }
}

/**
 * Easy event listener function
 */
const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
        if (all) {
            selectEl.forEach(e => e.addEventListener(type, listener))
        } else {
            selectEl.addEventListener(type, listener)
        }
    }
}

/**
 * Tags
 */
(function () {
    on('click', 'ul.tags', function (e) {
        select('#search-field').focus();
    })
    on('keypress', '#search-field', function (event) {
        if (event.keyCode == '13') {
            event.preventDefault();
            if ((this.value != '')) {
                let el = document.createElement("li");
                el.className = "addedTag";
                el.innerHTML = `${this.value} <span class="tagRemove" onclick="this.parentNode.remove();"></span><input type="hidden" value="${this.value}" name="tags[]">`;

                select('.tags .tagAdd').insertAdjacentElement('beforebegin', el);

                this.value = '';

            } else {
                this.value = '';

            }
        }
    })
}())

/**
 * Show review upload image
 * */

function showreview(event) {
    if (event.target.files.length > 0) {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById('file-ip-1-preview');
        preview.src = src;
        preview.style.display = "block";
    }
}

on("click", "#discounts-field-2", function () {
    select("#select-course-js").className = "d-block";
})

on("click", "#discounts-field-1", function () {
    select("#select-course-js").className = "d-none";
})




/**
 * change theme
 */

$(".setting_switch .lv-btn").on("change", function () {
    this.checked ? $("body").addClass("dark-theme") : $("body").removeClass("dark-theme")
})

/**
 * open setting navbar
 */

$("#js-setting-ui").on("click", function () {
    $(".theme-setting__nav").toggleClass("open")
})

/**
 * close setting navbar
 */


$(document).on("click", function (s) {
    $(s.target).closest("#js-setting-ui").length || $(s.target).closest(".theme-setting__nav").length || (
        $(".theme-setting__nav").removeClass("open"),
            $("body").removeClass("overflow-hidden"));
})


/**
 * confirmation delete button
 */

on('click', '.js-btn-delete', function () {
    Swal.fire({
        title: 'از انجام این عملیات اطمینان دارید ؟!',
        text: "این عملیات قابل برگشت نمی باشد",
        icon: 'warning',
        iconHtml: '<i class="ri-information-line"></i>',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'لغو',
        confirmButtonText: 'تایید'
    })
}, true);

/**
 * return back page button
 */

on('click', '#js-btn-back-page', function () {
    history.back();
})

/**
 * pagination
 */

const element = document.querySelector(".pagination ul");
let totalPages = 10;
let page = 1;


element ? element.innerHTML = createPagination(totalPages, page) : null;

function createPagination(totalPages, page) {
    let liTag = '';
    let active;
    let beforePage = page - 1;
    let afterPage = page + 1;
    if (page > 1) {
        liTag += `<li class="btn-pg-ui prev" onclick="createPagination(totalPages, ${page - 1})"><span><i class="ri-arrow-right-s-line"></i></span></li>`;
    }

    if (page > 2) {
        liTag += `<li class="first numb" onclick="createPagination(totalPages, 1)"><span>1</span></li>`;
        if (page > 3) {
            liTag += `<li class="dots"><span>...</span></li>`;
        }
    }

    if (page == totalPages) {
        beforePage = beforePage - 2;
    } else if (page == totalPages - 1) {
        beforePage = beforePage - 1;
    }
    if (page == 1) {
        afterPage = afterPage + 2;
    } else if (page == 2) {
        afterPage = afterPage + 1;
    }

    for (var plength = beforePage; plength <= afterPage; plength++) {
        if (plength > totalPages) {
            continue;
        }
        if (plength == 0) {
            plength = plength + 1;
        }
        if (page == plength) {
            active = "active";
        } else {
            active = "";
        }
        liTag += `<li class="numb ${active}" onclick="createPagination(totalPages, ${plength})"><span>${plength}</span></li>`;
    }

    // if(page < totalPages - 1){ //if page value is less than totalPage value by -1 then show the last li or page
    //     if(page < totalPages - 2){ //if page value is less than totalPage value by -2 then add this (...) before the last li or page
    //         liTag += `<li class="dots"><span>...</span></li>`;
    //     }
    //     liTag += `<li class="last numb" onclick="createPagination(totalPages, ${totalPages})"><span>${totalPages}</span></li>`;
    // }

    if (page < totalPages) {
        liTag += `<li class="btn-pg-ui next" onclick="createPagination(totalPages, ${page + 1})"><span> <i class="ri-arrow-left-s-line"></i></span></li>`;
    }
    element ? element.innerHTML = liTag : ''; //add li tag inside ul tag
    return liTag; //reurn the li tag
}


