<?php
// require tat ca cac file co trong du an vao day
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connectdb.php';

// require file trong controllers va models
//dieu huong
require_file(PATH_CONTROLLER);
require_file(PATH_MODELS);
// debug(PATH_CONTROLLER);
// homeIndex();
// productIndex();
getUser();

// ngat ket noi
require_once './commons/disconnectdb.php';
