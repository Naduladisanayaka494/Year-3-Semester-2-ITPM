const { checkToken } = require("../auth/token_validation");

module.exports = app => {
    const Floors = require("../controllers/floor.controller");
  
    var router = require("express").Router();

    router.post("/",checkToken, Floors.create);
    router.get("/",checkToken, Floors.findAll);
    router.get("/:id",checkToken, Floors.getOne);
    router.patch("/:id",checkToken, Floors.update);

    app.use("/api/v1/floors", router);
}