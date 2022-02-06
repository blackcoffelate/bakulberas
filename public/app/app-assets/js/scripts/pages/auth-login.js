$(function () {
  'use strict'
  var pageLoginForm = $('.auth-login-form')

  if (pageLoginForm.length) {
    pageLoginForm.validate({
      rules: {
        username: {
          required: true,
        },
        password: {
          required: true,
        },
      },
    })
  }
})
