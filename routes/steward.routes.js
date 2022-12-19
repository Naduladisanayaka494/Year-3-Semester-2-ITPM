const { checkToken } = require("../auth/token_validation");

module.exports = app => {
    const Counters = require("../controllers/steward.controller");
  
    var router = require("express").Router();

    router.post("/",checkToken, Counters.create);
    // router.get("/",checkToken, Counters.findAll);
    // router.get("/:id",checkToken, Counters.getOne);
    // router.patch("/:id",checkToken, Counters.update);

    app.use("/api/v1/stewards", router);
}