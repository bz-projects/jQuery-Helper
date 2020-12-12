<?php 

CSF::createSection( jh_options_id, array(
    'title'         => __('Credits', 'jh'),
    'icon'          => 'fas fa-info',
    'fields'        => array(

        array(
            'type'      => 'heading',
            'content'   =>  __('Credits & Copyrights', 'jh'),
        ),

        array(
            'type'      => 'content',
            'content'   => __('Here you can find all informations about used frameworks and copyrights.', 'jh'),
        ),

        array(
            'type'      => 'content',
            'content'   => __('<h3>Plugin Developer</h3>Benjamin Zekavica <br /> E-Mail: info@benjamin-zekavica.de <br /> Web: www.benjamin-zekavica.de', 'jh'),
        ),

        array(
            'type'      => 'content',
            'content'   => __('<h3>jQuery</h3>I used the jQuery Libary for this plugin. More Informatione you can find here: <a href="https://jquery.com/" target="_blank">jquery.com</a> <p style="max-width: 590px;"><small>Copyright 2020 OpenJS Foundation and jQuery contributors. All rights reserved. See jQuery License for more information. The OpenJS Foundation has registered trademarks and uses trademarks. For a list of trademarks of the OpenJS Foundation, please see our Trademark Policy and Trademark List. Trademarks and logos not indicated on the list of OpenJS Foundation trademarks are trademarks™ or registered® trademarks of their respective holders. Use of them does not imply any affiliation with or endorsement by them. OpenJS Foundation Terms of Use, Privacy, and Cookie Policies also apply.</small></p>', 'jh'),
        ),

        array(
            'type'      => 'content',
            'content'   => __('<h3>Codestar Framework - WordPress Options Framework</h3> I bought this options framework and I have a licence for this WordPress PHP Framework.<p style="max-width: 590px;"><small>The licenses for most software are designed to take away your freedom to share and change it. By contrast, the GNU General Public License is intended to guarantee your freedom to share and change free software–to make sure the software is free for all its users. This General Public License applies to most of the Free Software Foundation’s software and to any other program whose authors commit to using it. (Some other Free Software Foundation software is covered by the GNU Lesser General Public License instead.) You can apply it to your programs, too. When we speak of free software, we are referring to freedom, not price. Our General Public Licenses are designed to make sure that you have the freedom to distribute copies of free software (and charge for this service if you wish), that you receive source code or can get it if you want it, that you can change the software or use pieces of it in new free programs; and that you know you can do these things. <br /><br /> To protect your rights, we need to make restrictions that forbid anyone to deny you these rights or to ask you to surrender the rights. These restrictions translate to certain responsibilities for you if you distribute copies of the software, or if you modify it. For example, if you distribute copies of such a program, whether gratis or for a fee, you must give the recipients all the rights that you have. You must make sure that they, too, receive or can get the source code. And you must show them these terms so they know their rights. We protect your rights with two steps: (1) copyright the software, and (2) offer you this license which gives you legal permission to copy, distribute and/or modify the software. Also, for each author’s protection and ours, we want to make certain that everyone understands that there is no warranty for this free software. If the software is modified by someone else and passed on, we want its recipients to know that what they have is not the original, so that any problems introduced by others will not reflect on the original authors’ reputations. Finally, any free program is threatened constantly by software patents. We wish to avoid the danger that redistributors of a free program will individually obtain patent licenses, in effect making the program proprietary. To prevent this, we have made it clear that any patent must be licensed for everyone’s free use or not licensed at all.</small></p>', 'jh'),
        ),
    )
) );