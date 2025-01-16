// public/js/scripts.js

document.addEventListener('DOMContentLoaded', function() {
    const categoryTitles = document.querySelectorAll('.category-title');
    const directorateTitles = document.querySelectorAll('.directorate-title');
    const treeview = document.querySelectorAll('.treeview-title');

    treeview.forEach(content=> {
        content.addEventListener('click', function(){
            const treeviewContent = this.nextElementSibling;
            const arrow = this.querySelector('.arrow-title i');
            console.log(content)
            if(treeviewContent && treeviewContent.classList.contains('treeview-content')){
                treeviewContent.classList.toggle('open');
                if (arrow.classList.contains('bi-plus-square-fill')) {
                    arrow.classList.remove('bi-plus-square-fill');
                    arrow.classList.add('bi-dash-square-fill');
                } else {
                    arrow.classList.remove('bi-dash-square-fill');
                    arrow.classList.add('bi-plus-square-fill');
                }
            }
        })
    })
    categoryTitles.forEach(title => {
    title.addEventListener('click', function () {
        const subCategory = this.nextElementSibling;
        const arrow = this.querySelector('.arrow');
        console.log(subCategory);
        if (subCategory && subCategory.classList.contains('sub-category')) {
            subCategory.classList.toggle('open');
            arrow.classList.toggle('rotated');
        }
    });
});

});