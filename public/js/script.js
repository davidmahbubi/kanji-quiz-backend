$(function() {
    if ($('.alert-error-triggerer')) {
        Notiflix.Notify.Failure($('.alert-success-triggerer').data('message'));
    }
    if ($('.alert-success-triggerer')) {
        Notiflix.Notify.Success($('.alert-success-triggerer').data('message'));
    }
})