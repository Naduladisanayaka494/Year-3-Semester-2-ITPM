const db = require("../models");
const Categories = db.categories;
const Branch = db.branches;
const Op = db.Op;

exports.create = (req, res) => {
  const logedUser = req.decoded.result;
  if (!req.body.name) {
    res.status(400).send({
      message: "Content can not be empty!",
    });
    return;
  }


  const category = {
    name: req.body.name,
    branchId: logedUser.branchId,
  };

  Categories.create(category)
    .then((data) => {
      res.send(data);
    })
    .catch((err) => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while creating the Category.",
      });
    });
};

exports.findAll = (req, res) => {
    const logedUser = req.decoded.result;
  return Categories.findAll({ where: { branchId: logedUser.branchId } ,include: Branch })
    .then((data) => {
      res.send(data);
    })
    .catch((err) => {
      res.status(500).send({
        message:
        err.message || "Some error occurred while getting the Categories.",
      });
    });
};

exports.getOne = (req, res) => {
  const id = req.params.id;
  return Categories.findByPk(id, { include: Branch })
    .then((data) => {
      res.send(data);
    })
    .catch((err) => {
      res.status(500).send({
        message:
        err.message || "Some error occurred while getting the Category.",
      });
    });
};
exports.update = (req, res) => {
  const id = req.params.id;
  const product = {
    name: req.body.name,
  };
  return Categories.update(product, {
    where: {
      id: id,
    }
  })
    .then((data) => {
        if(data[0]==0){
            res.status(404).send({
                message:"data not found",
            });
        }else{
            Categories.findByPk(id, { include: Branch }).then((data) => {
                res.send(data);
              })
              .catch((err) => {
                res.status(500).send({
                    message:
                    err.message || "Some error occurred while getting the Category.",
                    })
                });
        }
    })
    .catch((err) => {
      res.status(500).send({
        message:
        err.message || "Some error occurred while updating the Category.",
      });
    });
};
