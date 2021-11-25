INSERT INTO `tbl_users` (
            `user_id`, 
            `username`, 
            `password`, 
            `user_name`, 
            `user_phone`, 
            `user_money`, 
            `user_mail`, 
            `user_address`, 
            `user_profile`, 
            `user_insert`, 
            `user_update`, 
            `user_role`
            ) VALUES (
                NULL, 
                '".$username."', 
                '".$password."', 
                '".$user_name."', 
                '".$user_phone."', 
                '0', 
                '".$user_mail."', 
                '555/656', 
                'https://i.pinimg.com/474x/50/70/10/5070101ae7cc267a1ba03d30abdd38e9.jpg', 
                NOW(), 
                NOW(), 
                'member'
                )

INSERT INTO `tbl_product` (
    `product_id`, 
    `product_name`, 
    `product_detial`, 
    `product_group`, 
    `product_brand`, 
    `product_image`, 
    `promotion`, 
    `product_lastupdate`, 
    `product_insert`
    ) VALUES (
        NULL, 
        '".$product_name."', 
        '".$product_detial."', 
        '".$product_group."', 
        '".$product_brand."', 
        'https://www.jib.co.th/img_master/product/original/20210825104649_43471_21_2.jpg', 
        '".$promotion."', 
        'NOW()', 
        'NOW()'
        )


SELECT * FROM `tbl_product` WHERE 
            product_group LIKE "%CPU%" AND
            product_name LIKE "%RTX%" OR 
            product_detial LIKE "%RTX%" OR
            product_brand LIKE "%RTX%"
            