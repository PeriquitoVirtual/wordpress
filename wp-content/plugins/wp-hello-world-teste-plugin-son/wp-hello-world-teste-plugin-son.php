<?php

/*

        Plugin Name: Hello World School of Net
        Author: Cícero Cristino Machado
        Description: Um plugin que vai printar a mensagem "Hello World" na tela de login
        Version: 0.0001
        Author URI: http://www.periquitovirtual.com.br

 */


    function wp_printando_hello_world_na_tela_de_login(){

        echo "<h1>Hello World</h1>";


    }

    add_action('init', 'wp_printando_hello_world_na_tela_de_login');

    function wp_alterando_o_texto_do_footer_admin(){

        echo "Isso é uma aula da School of Net";

    }

    add_filter('admin_footer_text','wp_alterando_o_texto_do_footer_admin');
