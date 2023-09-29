const { Router } = require('express');
const router = Router();
const user = require("./user");
 
//Raiz
router.use('/user',user);



module.exports = router;