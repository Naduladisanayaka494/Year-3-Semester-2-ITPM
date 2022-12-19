const { checkToken } = require("../auth/token_validation");

module.exports = app => {
    const branches = require("../controllers/branch.controller");
  
    var router = require("express").Router();

    router.post("/", checkToken,branches.create);
    router.get("/", checkToken,branches.findAll);


    app.use("/api/v1/branches", router);

}