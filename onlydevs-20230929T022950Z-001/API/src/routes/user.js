const { Router } = require('express');
const router = Router();


router.get("/register",(req,res)=>{

    res.send("register  ");

})

router.get("/login",(req,res)=>{

    res.send("login");

})

module.exports = router;