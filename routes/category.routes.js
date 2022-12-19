const { checkToken } = require("../auth/token_validation");

module.exports = app => {
    const Categories = require("../controllers/category.controller");
  
    var router = require("express").Router();

    router.post("/",checkToken, Categories.create);
    router.get("/",checkToken, Categories.findAll);
    router.get("/:id",checkToken, Categories.getOne);
    router.patch("/:id",checkToken, Categories.update);

    app.use("/api/v1/categories", router);
}