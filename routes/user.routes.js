module.exports = app => {
    const users = require("../controllers/user.controller");
    const { checkToken } = require("../auth/token_validation");

    var router = require("express").Router();

    router.post("/register", users.create);
    router.post("/login", users.login);
    router.post("/user/create",checkToken, users.subcreate);

    app.use("/api/v1", router);

}