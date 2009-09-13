<?php
/**
 *                    Jojo CMS
 *                ================
 *
 * Copyright 2007 Harvey Kane <code@ragepank.com>
 * Copyright 2007 Michael Holt <code@gardyneholt.co.nz>
 * Copyright 2007 Melanie Schulz <mel@gardyneholt.co.nz>
 *
 * See the enclosed file license.txt for license information (LGPL). If you
 * did not receive this file, see http://www.fsf.org/copyleft/lgpl.html.
 *
 * @author  Harvey Kane <code@ragepank.com>
 * @author  Michael Cochrane <code@gardyneholt.co.nz>
 * @author  Melanie Schulz <mel@gardyneholt.co.nz>
 * @license http://www.fsf.org/copyleft/lgpl.html GNU Lesser General Public License
 * @link    http://www.jojocms.org JojoCMS
 */


$_options[] = array(
    'id' => 'nofollow_pagination',
    'category' => 'SEO',
    'label' => 'Nofollow pagination links',
    'description' => 'Uses rel=nofollow on pagination links, which prevents search engines finding potentially duplicate or useless page 2, 3, 4 etc pages. Page 1 links are never nofollowed.',
    'type' => 'radio',
    'default' => 'no',
    'options' => 'yes,no',
    'plugin' => 'jojo_pagination'
);
$_options[] = array(
    'id' => 'pagination_before',
    'category' => 'Design',
    'label' => 'Divider before each page link',
    'description' => 'The divider before each page link ie \'[\'',
    'type' => 'text',
    'default' => '[',
    'options' => '',
    'plugin' => 'jojo_pagination'
);
$_options[] = array(
    'id' => 'pagination_after',
    'category' => 'Design',
    'label' => 'Divider after each page link',
    'description' => 'The divider after each page link ie \']\'',
    'type' => 'text',
    'default' => ']',
    'options' => '',
    'plugin' => 'jojo_pagination'
);
$_options[] = array(
    'id' => 'pagination_separator',
    'category' => 'Design',
    'label' => 'A separator rather than a before after',
    'description' => 'The separator on the pagination',
    'type' => 'text',
    'default' => '',
    'options' => '',
    'plugin' => 'jojo_pagination'
);