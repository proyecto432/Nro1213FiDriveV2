$('#eje1213').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'glyphicon glyphicon-ok',

        invalid: 'glyphicon glyphicon-remove',

        validating: 'glyphicon glyphicon-refresh'

    },

    fields: {

        nombre: {

            validators: {

                notEmpty: {

                    message: 'No puede enviar nada'

                }

            }

        },
        user:{

            validators: {

                notEmpty: {

                    message: 'Elija una opcion'

                }

            }

        }



      

    }

});

$('#compartir').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'glyphicon glyphicon-ok',

        invalid: 'glyphicon glyphicon-remove',

        validating: 'glyphicon glyphicon-refresh'

    },

    fields: {

        nombre: {

            validators: {

                notEmpty: {

                    message: 'No puede enviar nada'

                }

            }

        },
        user:{

            validators: {

                notEmpty: {

                    message: 'Elija una opcion'

                }

            }

        },
        dias:{

            validators: {

                notEmpty: {

                    message: 'no puede dejar vacio este campo'

                },
                integer:{

                    message: 'seeeeeeeeeeeeee requiere un valor numerico.'

                }


            }

        },
        descargar:{

            validators: {

                notEmpty: {

                    message: 'no puede dejar vacio este campo'

                },
                integer:{

                    message: 'seeeeeeeeeeeeee requiere un valor numerico.'

                }


            }

        }
           



      

    }

});


$('#elim').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'glyphicon glyphicon-ok',

        invalid: 'glyphicon glyphicon-remove',

        validating: 'glyphicon glyphicon-refresh'

    },

    fields: {

        teli: {

            validators: {

                notEmpty: {

                    message: 'Debe completar este campo'

                }

            }

        },
        user:{

            validators: {

                notEmpty: {

                    message: 'Elija una opcion'

                }

            }

        }



      

    }

});



$('#ejeArchivos').bootstrapValidator({

    message: 'Este valor no es valido',

    feedbackIcons: {

        valid: 'glyphicon glyphicon-ok',

        invalid: 'glyphicon glyphicon-remove',

        validating: 'glyphicon glyphicon-refresh'

    },

    fields: {

        nombre: {

            validators: {

                notEmpty: {

                    message: 'Debe completar este campo'

                }

            }

        }


      

    }

});