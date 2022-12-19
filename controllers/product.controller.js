const db = require("../models");
const Products = db.products;
const Branch = db.branches;
const Category = db.categories;

const Op = db.Op;

exports.create = (req, res) => {
  const logedUser = req.decoded.result;
  if (!req.body.name) {
    res.status(400).send({
      message: "Content can not be empty!",
    });
    return;
  }

  const product = {
    name: req.body.name,
    code: req.body.code,
    price: req.body.price,
    enabled: req.body.status ? req.body.status : true,
    branchId: logedUser.branchId,
    categoryId:req.body.category
  };

  Products.create(product)
    .then((data) => {
      res.send(data);
    })
    .catch((err) => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while creating the Product.",
      });
    });
};

exports.findAll = (req, res) => {
  const logedUser = req.decoded.result;
  return Products.findAll({ where: { branchId: logedUser.branchId },include: Category })
    .then((data) => {
      res.send(data);
    })
    .catch((err) => {
      res.status(500).send({
        message:
        err.message || "Some error occurred while getting the Products.",
      });
    });
};

exports.getOne = (req, res) => {
  const id = req.params.id;
  return Products.findByPk(id, { include: Category })
    .then((data) => {
      res.send(data);
    })
    .catch((err) => {
      res.status(500).send({
        message:
        err.message || "Some error occurred while getting the Product.",
      });
    });
};
exports.update = (req, res) => {
  const id = req.params.id;
  const product = {
    name: req.body.name,
    code: req.body.code,
    price: req.body.price,
    categoryId:req.body.category
  };
  return Products.update(product, {
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
             Products.findByPk(id, { include: Branch }).then((data) => {
                res.send(data);
              })
              .catch((err) => {
                res.status(500).send({
                    message:
                    err.message || "Some error occurred while getting the Product.",
                    })
                });
        }
    })
    .catch((err) => {
      res.status(500).send({
        message:
        err.message || "Some error occurred while updating the Product.",
      });
    });
};
exports.disabled = (req, res) => {
    const id = req.params.id;
    const product = {
      enabled: false
    };
    return Products.update(product, {
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
               Products.findByPk(id, { include: Branch }).then((data) => {
                  res.send(data);
                })
                .catch((err) => {
                  res.status(500).send({
                      message:
                      err.message || "Some error occurred while getting the Product.",
                      })
                  });
          }
      })
      .catch((err) => {
        res.status(500).send({
          message:
          err.message || "Some error occurred while updating the Product.",
        });
      });
  };