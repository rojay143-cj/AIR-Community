$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="pop-csrf_token"]').attr("content"),
        },
    });
    new DataTable("#production");
    new DataTable("#country");
    new DataTable("#genre");
    new DataTable("#movie");
    $(".dt-input").attr("placeholder", "Type here...");

    setTimeout(function () {
        $(".alert").slideUp(200);
    }, 3000);
    
});
$(function () {
    $(".setting").on("click", function (e) {
        e.stopPropagation();
        $(".settings").toggle();
    });
    $(document).on("click", function (e) {
        if (!$(e.target).closest(".settings").length) {
            $(".settings").fadeOut();
        }
        if (!$(e.target).closest(".modal-content").length) {
            $(".modal-add_role").fadeOut(150);
            $(".modal-add_country").fadeOut(150);
            $(".modal-add_genre").fadeOut(150);
            $(".modal-add_movie").fadeOut(150);
        }
        if (!$(e.target).closest(".sidebar").length) {
            $(".sidebar")
                .fadeOut(100)
                .removeClass("left-0")
                .addClass("-left-72");
        }
    });
});

$(document).ready(function () {
    function toggleSection(section) {
        $(".TEAM, .COUNTRY, .GENRE, .MOVIE, .UPLOAD").hide();
        localStorage.setItem("TEAM", "false");
        localStorage.setItem("COUNTRY", "false");
        localStorage.setItem("GENRE", "false");
        localStorage.setItem("MOVIE", "false");
        localStorage.setItem("UPLOAD", "false");

        if (section) {
            $(section).toggle();
            localStorage.setItem(section.slice(1).toUpperCase(), $(section).is(":visible"));
        }
    }
    $(".TEAM").toggle(localStorage.getItem("TEAM") === "true");
    $(".COUNTRY").toggle(localStorage.getItem("COUNTRY") === "true");
    $(".GENRE").toggle(localStorage.getItem("GENRE") === "true");
    $(".MOVIE").toggle(localStorage.getItem("MOVIE") === "true");
    $(".UPLOAD").toggle(localStorage.getItem("UPLOAD") === "true");

    $("#COUNTRY").on("click", function () {
        toggleSection(".COUNTRY");
    });

    $("#PRODUCTION").on("click", function () {
        toggleSection(".TEAM");
    });

    $("#GENRE").on("click", function () {
        toggleSection(".GENRE");
    });

    $("#MOVIE").on("click", function () {
        toggleSection(".MOVIE");
    });

    $('#UPLOAD').on('click', function () {
        toggleSection(".UPLOAD");
    });
});


// Add Production Modal - CJ
$(function () {
    const addrole = $(".btn-add_role");
    const exitAdd = $(".close-modal");
    const exitEdit = $(".close-editmodal");
    const exitdelete = $(".close-deletemodal");
    addrole.click(function (e) {
        $(".modal-add_role").fadeIn(300);
        e.stopPropagation();
    });
    exitAdd.click(function (e) {
        $(".modal-add_role").fadeOut(0);
        e.stopPropagation();
    });
    exitEdit.click(function () {
        $(".closeedit").fadeOut(0);
    });
    exitdelete.click(function () {
        $(".closedelete").fadeOut(0);
    });
});

// Delete Production Modal & Edit modal - CJ
$(document).ready(function () {
    $('button[class^="btn-edit_cast"]').on("click", function () {
        let prod_id = $(this).val();
        $(".modal-edit_role_" + prod_id).fadeIn(200);
    });
    $('button[class^="btn-delete_cast"]').on("click", function () {
        let prod_id = $(this).val();
        $(".modal-delete_role_" + prod_id).fadeIn(200);
    });
});

// Add Country Modal - CJ
$(function () {
    const addrole = $(".btn-add_country");
    const exitAdd = $(".close-modal");
    const exitEdit = $(".close-editmodal");
    const exitdelete = $(".close-deletemodal");
    addrole.click(function (e) {
        $(".modal-add_country").fadeIn(300);
        e.stopPropagation();
    });
    exitAdd.click(function (e) {
        $(".modal-add_country").fadeOut(0);
        e.stopPropagation();
    });
    exitEdit.click(function () {
        $(".closeedit").fadeOut(0);
    });
    exitdelete.click(function () {
        $(".closedelete").fadeOut(0);
    });
});

// Delete Country Modal & Edit modal - CJ
$(document).ready(function () {
    $('button[class^="btn-edit_country"]').on("click", function () {
        let country_id = $(this).val();
        $(".modal-edit_country_" + country_id).fadeIn(200);
    });
    $('button[class^="btn-delete_country"]').on("click", function () {
        let country_id = $(this).val();
        $(".modal-delete_country_" + country_id).fadeIn(200);
    });
});

// Add Genre Modal - CJ
$(function () {
    const addrole = $(".btn-add_genre");
    const exitAdd = $(".close-modal");
    const exitEdit = $(".close-editmodal");
    const exitdelete = $(".close-deletemodal");
    addrole.click(function (e) {
        $(".modal-add_genre").fadeIn(300);
        e.stopPropagation();
    });
    exitAdd.click(function (e) {
        $(".modal-add_genre").fadeOut(0);
        e.stopPropagation();
    });
    exitEdit.click(function () {
        $(".closeedit").fadeOut(0);
    });
    exitdelete.click(function () {
        $(".closedelete").fadeOut(0);
    });
});

// Delete Genre Modal & Edit modal - CJ
$(document).ready(function () {
    $('button[class^="btn-edit_genre]').on("click", function () {
        let genre_id = $(this).val();
        $(".modal-edit_genre_" + genre_id).fadeIn(200);
    });
    $('button[class^="btn-delete_genre"]').on("click", function () {
        let genre_id = $(this).val();
        $(".modal-delete_genre_" + genre_id).fadeIn(200);
    });
});

// Add Movie Modal - CJ
$(function () {
    const addrole = $(".btn-add_movie");
    const exitAdd = $(".close-modal");
    const exitEdit = $(".close-editmodal");
    const exitdelete = $(".close-deletemodal");
    addrole.click(function (e) {
        $(".modal-add_movie").fadeIn(300);
        e.stopPropagation();
    });
    exitAdd.click(function (e) {
        $(".modal-add_movie").fadeOut(0);
        e.stopPropagation();
    });
    exitEdit.click(function () {
        $(".closeedit").fadeOut(0);
    });
    exitdelete.click(function () {
        $(".closedelete").fadeOut(0);
    });
});

// Delete Movie Modal & Edit modal - CJ
$(document).ready(function () {
    let btn_edit = $('button[id^="btn-edit_movie_"]');
    let btn_delete = $('button[id^="btn-delete_movie_"]');
    btn_edit.click(function () {
        let movie_id = $(this).attr("id").split("_").pop();
        $(".modal-edit_movie_" + movie_id).fadeIn(200);
    });
    btn_delete.click(function () {
        let prod_id = $(this).attr("id").split("_").pop();
        $(".modal-delete_movie_" + movie_id).fadeIn(200);
    });
});

// Whole Movie page codes - CJ
$(document).ready(function () {
    // Search for movie Cast - CJ
    function searchCast(input, cast_name) {
        input.on("keyup", function () {
            var value = $(this).val().toLowerCase();
            cast_name.filter(function () {
                $(this).toggle(
                    $(this).text().toLowerCase().indexOf(value) > -1
                );
            });
        });
    }
    searchCast($(".append_search"), $(".cast_names li"));

    // Append GCP to the DIV - CJ
    let append_team = $('button[id^="append_team_"]');
    let append_genre = $('button[id^="append_genre_"]');
    let append_country = $('button[id^="append_country_"]');
    let GCP = $(".G_C_P");
    let AddForm = $("#AddForm")[0];
    let categorizeGCP = {
        genre: new Set(),
        country: new Set(),
        team: new Set(),
    };

    // Function to add item to GCP and handle duplicates - CJ
    function handleAdd(
        item_name,
        bgColor,
        textColor,
        category,
        clear,
        btnexit
    ) {
        if (!categorizeGCP[category].has(item_name)) {
            GCP.append(
                `<p title="${category}" class="item p-1 relative ${bgColor} shadow-sm ${textColor}" style="position: relative; padding-right: 20px;">
            ${item_name}
            <button type="button" title="Remove ${item_name}?" class="remove_gcp absolute right-0" style="right: 5px; top: 50%; transform: translateY(-50%);">${clear}</button>
        </p>`
            );
            categorizeGCP[category].add(item_name);
            $(".error").text("").hide();
        } else {
            $(".error")
                .text(`${item_name} already exists in ${category}`)
                .show();
        }
        $(document).on("click", ".remove_gcp", function (e) {
            e.preventDefault();
            e.stopPropagation();

            const item = $(this).closest(".item").text().trim();
            categorizeGCP[category].delete(item);
            $(this).parent().remove();
        });
    }
    // Function to clear all categories when clicking the exit button of the modal ;)
    function clearAllCategories() {
        for (const category in categorizeGCP) {
            if (categorizeGCP.hasOwnProperty(category)) {
                categorizeGCP[category].clear();
            }
        }
        GCP.empty();
    }

    append_team.click(function () {
        let prod_name = $(this).closest("li").text().trim();
        handleAdd(
            prod_name,
            "bg-gray-300",
            "text-zinc-800",
            "team",
            '<i class="fa-solid fa-minus fa-xl"></i>'
        );
    });

    append_genre.click(function () {
        let genre_name = $(this).closest("li").text().trim();
        handleAdd(
            genre_name,
            "bg-red-600",
            "text-gray-300",
            "genre",
            '<i class="fa-solid fa-minus fa-xl"></i>'
        );
    });

    append_country.click(function () {
        let country_name = $(this).closest("li").text().trim();
        handleAdd(
            country_name,
            "bg-yellow-600",
            "text-gray-300",
            "country",
            '<i class="fa-solid fa-minus fa-xl"></i>'
        );
    });
    // Add Movies - CJ
    $("#btn_save").on("click", function (e) {
        e.preventDefault();

        let GCP = {
            team: Array.from(categorizeGCP.team),
            genre: Array.from(categorizeGCP.genre),
            country: Array.from(categorizeGCP.country),
        };

        switch (true) {
            case GCP.team.length == 0:
                $(".error").text("Production Team is missing!").show();
                return;
            case GCP.genre.length == 0:
                $(".error").text("Genre is empty!").show();
                return;
            case GCP.country.length == 0:
                $(".error").text("Every movie has a country!").show();
                return;
            default:
                break;
        }

        let formData = new FormData(AddForm);
        formData.append("GCP", JSON.stringify(GCP));
        $.ajax({
            url: "/Pop Admin Panel/AddMovie",
            method: "POST",
            processData: false,
            contentType: false,
            data: formData,
            success: function (response) {
                deleteMovie();
                $(".alert-success").text(response.message).show();
                getMovies();
            },
            error: function (error) {
                let errorMessage =
                    error.responseJSON?.message ||
                    "An unexpected error occured.";
                $(".alert-error").text(errorMessage).show();
            },
        });
    });
    // Fetch Movies - CJ
    getMovies();
    function getMovies() {
        $.ajax({
            url: "/Pop Admin Panel/fetchmovies",
            method: "GET",
            dataType: "json",
            success: function (response) {
                let table = $("#movie").DataTable();
                table.clear();
                $('#movieId').empty();
                if (response.movies.length > 0) {
                    $.each(response.movies, function (key, movie) {
                        table.row.add([
                            `<td class="px-4 py-2 hover:bg-stone-600 hover:bg-opacity-30 cursor-pointer border-r border-b border-stone-600">
                                <img src="${movie.poster_url}" alt="${movie.title}" class="rounded-sm object-cover w-20 h-28">
                            </td>`,
                            `<td class="py-2 px-1 hover:bg-stone-600 hover:bg-opacity-30 cursor-pointer border-r border-b border-stone-600">${movie.title}</td>`,
                            `<td class="py-2 px-1 hover:bg-stone-600 hover:bg-opacity-30 cursor-pointer border-r border-b border-stone-600">${movie.type}</td>`,
                            `<td class="py-2 px-1 hover:bg-stone-900 hover:bg-opacity-30 cursor-pointer border-r border-b border-stone-600">${movie.release_date}</td>`,
                            `<td class="py-2 px-1 hover:bg-stone-600 hover:bg-opacity-30 cursor-pointer border-r border-b border-stone-600">${movie.rt_score}</td>`,
                            `<td class="p-2 px-1 text-center hover:bg-stone-600 hover:bg-opacity-30 cursor-pointer border-b border-stone-600">
                                <button type="button" value="${movie.movie_id}" data-title="${movie.title}" class="btn-edit_movie text-yellow-600 hover:text-yellow-500">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </button>
                                <button type="button" value="${movie.movie_id}" data-title="${movie.title}" class="btn-delete_movie text-red-500 hover:text-red-700 ml-2">
                                    <i class="fa-regular fa-trash-can"></i>
                                </button>
                            </td>`,
                        ]);
                        $('#movieId').append(`
                            <option value="${movie.movie_id}">${movie.title}</option>
                        `);
                    });
                } else {
                    $('#movieId').append(`
                        <option value="" disabled>No movie available</option>
                    `);
                }
    
                table.draw();
            },    
            error: function (error) {
                let errorMessage =
                    error.responseJSON?.message ||
                    "An unexpected error occurred during the execution.";
                $(".error").text(errorMessage).show();
            },
        });
    }

    // Append movie's modal edit when Clicked Popmovies - CJ
    $(document).on("click", ".btn-edit_movie", function (e) {
        e.stopPropagation();
        let movie_id = $(this).val();
        let movie_title = $(this).data("title");
        $.ajax({
            url: "/Pop Admin Panel/fetchedittomovie",
            method: "POST",
            data: { movie_id },
            success: function (response) {
                $(".modal-title").text(movie_title);
                $(".modal-edit_movie")
                    .fadeIn(200)
                    .data("Movie-ID", movie_id)
                    .attr("title", movie_title);
                $.each(response.genres, function (key, genre) {
                    GCP.append(
                        handleAdd(
                            genre,
                            "bg-red-600",
                            "text-slate-300",
                            "genre",
                            '<i class="fa-solid fa-minus fa-xl"></i>'
                        )
                    );
                });
                $.each(response.countries, function (key, country) {
                    GCP.append(
                        handleAdd(
                            country,
                            "bg-yellow-600",
                            "text-slate-300",
                            "country",
                            '<i class="fa-solid fa-minus fa-xl"></i>'
                        )
                    );
                });
                $.each(response.casts, function (key, cast) {
                    GCP.append(
                        handleAdd(
                            cast,
                            "bg-gray-300",
                            "text-stone-800",
                            "team",
                            '<i class="fa-solid fa-minus fa-xl"></i>'
                        )
                    );
                });
            },
            error: function (jqXHR) {
                console.log(jqXHR);
            },
        });
    });

    // Send GCP & Form data for editing
    $(document).on("click", "#btn_save_edit", function () {
        var message = "";
        let DataToSend = {
            genres: Array.from(categorizeGCP.genre),
            country: Array.from(categorizeGCP.country),
            cast: Array.from(categorizeGCP.team),
            movie_id: $(".modal-edit_movie").data("Movie-ID"),
            movie_title: $(".modal-edit_movie").attr("title"),
        };
        if (
            !DataToSend.genres.length ||
            !DataToSend.country.length ||
            !DataToSend.cast.length ||
            !DataToSend.movie_id ||
            !DataToSend.movie_title
        ) {
            $('.error').text('Please select the designated (Genre, Production Team, and Country) for this movie').show();
        } else {
            let formedit = $("#EditForm")[0];
            let edit_form_data = new FormData(formedit);
            edit_form_data.append("categorizeGCP", JSON.stringify(DataToSend));

            $.ajax({
                url: "/Pop Admin Panel/EditMovie",
                method: "POST",
                contentType: false,
                processData: false,
                data: edit_form_data,
                success: function (response) {
                    getMovies();

                    message = response.message || "Unexpected error occurred";
                    $(".success").text(message).show();
                },
                error: function (error) {
                    message =
                        error.responseJSON?.message ||
                        "Unexpected error occurred";
                    $(".error").text(message).show();
                },
            });
        }
    });

    $(".close-edit-modal").on("click", function (e) {
        e.preventDefault();
        e.stopPropagation();
        clearAllCategories();
        $(".modal-edit_movie").fadeOut(200);
    });

    // Append movie's modal delete when Clicked popmovies - CJ
    $(document).on("click", ".btn-delete_movie", function (e) {
        e.stopPropagation();
        let movie_id = $(this).val();
        let movie_title = $(this).data("title");
        $("#delete_movies").append(`
            <div class="modal-delete_movie_${movie_id} closedelete fixed inset-0 flex items-center justify-center z-30" style="display: none">
            <div class="modal-content bg-gray-200 text-stone-800 rounded-lg shadow-lg w-auto relative p-6 z-20">
                <div class="flex w-full justify-center"><i
                        class="fa-solid fa-triangle-exclamation fa-beat-fade text-4xl text-red-600"></i></div>
                <div class="modal-header flex justify-between items-center mb-6">
                    <h4 class="modal-title text-lg font-bold tracking-widest text-nowrap">Are you sure you want to remove
                        ${movie_title}?
                    </h4>
                    <button type="button"
                        class="close-deletemodal absolute right-3 top-3 text-gray-400 hover:text-gray-600 ml-10">
                        <i class="fa-solid fa-xmark text-xl"></i>
                    </button>
                </div>
                <div>
                    <p class="text-xs w-96 font-semibold tracking-wider">Note: This will delete this person permanently. You
                        cannot undo this action.</p>
                    <div class="modal-footer flex justify-start space-x-3 mt-10">
                        <button type="button"
                            class="close-deletemodal px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 border border-stone-800">
                            Cancel
                        </button>
                        <button type="button" value="${movie_id}"
                            class="delete_movie px-4 py-2 bg-red-700 text-sm text-gray-200 rounded hover:bg-red-600 focus:outline-none">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
            <div class="absolute inset-0 bg-slate-800 opacity-50 z-10"></div>
        </div>
        `);
        $(`.modal-delete_movie_${movie_id}`).fadeIn(300);
    });
    // Delete movie modal function - CJ
    function deleteModal(MovieModal) {
        MovieModal.animate({ opacity: 0 }, 300, function () {
            $(this).empty();
            $(this).css({ opacity: 1 });
        });
    }

    // Delete movie function - CJ
    function deleteMovie() {
        let movie_id = $(".delete_movie").val();
        $.ajax({
            url: "/Pop Admin Panel/DeleteMovie",
            method: "POST",
            data: { movie_id },
            success: function (response) {
                deleteModal($("#delete_movies"));
            },
            error: function (jqXHR) {
                console.log(jqXHR);
            },
        });
    }

    $(document).on("click", ".delete_movie", function () {
        deleteMovie();
        getMovies();
    });

    $(document).on("click", ".close-deletemodal", function () {
        deleteModal($("#delete_movies"));
    });

    $('#btn_upload').on('click',function(){
        let form = $('#upload_form')[0];
        let UploadsData = new FormData(form);
        $.ajax({
            url: '/Pop Admin Panel/upload movie',
            method: 'post',
            contentType: false,
            processData: false,
            data: UploadsData,
            success: function (response) { 
                getMovies();
                message = response.message || "Unexpected error occurred";
                console.log(message);
                var $success = $(".alert-success").text(message).parent().show();
                setTimeout(() => {
                    $success.slideUp();
                }, 1700);
             },
            error: function (error) { 
                message = error.responseJSON?.message || "Unexpected error occured";
                var $error = $(".alert-error").text(message).parent().show();
                setTimeout(() => {
                    $error.slideUp();
                }, 2500);
                
            }
        });
    });
});