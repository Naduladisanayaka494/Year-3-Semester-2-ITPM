const { checkToken } = require("../auth/token_validation");

module.exports = app => {
    const Products = require("../controllers/product.controller");
  
    var router = require("express").Router();

    router.post("/",checkToken, Products.create);
    router.get("/",checkToken, Products.findAll);
    router.get("/:id",checkToken, Products.getOne);
    router.patch("/:id",checkToken, Products.update);
    router.post("/:id/disabled",checkToken, Products.disabled);


    app.use("/api/v1/products", router);
}