const db = require("../models");
const Customers  = db.customers;
const Op = db.Op;

exports.create = (req, res) => {
  const logedUser = req.decoded.result;
  if (!req.body.name) {
    res.status(400).send({
      message: "Name can not be empty!",
    });
    return;
  }


  const customer = {
    name: req.body.name,
    phone: req.body.phone,
    address:req.body.address,
    branchId: logedUser.branchId
  };

  Customers.create(customer)
    .then((data) => {
      res.send(data);
    })
    .catch((err) => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while creating the Customer.",
      });
    });
};

exports.findAll = (req, res) => {
const logedUser = req.decoded.result;
  return Customers.findAll({where: { branchId: logedUser.branchId },})
    .then((data) => {
      res.send(data);
    })
    .catch((err) => {
      res.status(500).send({
        message:
        err.message || "Some error occurred while getting the Customers.",
      });
    });
};

exports.getOne = (req, res) => {
  const id = req.params.id;
  return Customers.findByPk(id)
    .then((data) => {
      res.send(data);
    })
    .catch((err) => {
      res.status(500).send({
        message:
        err.message || "Some error occurred while getting the Customers.",
      });
    });
};
exports.update = (req, res) => {
  const id = req.params.id;
  const customer = {
    name: req.body.name,
    address: req.body.address
  };
  return Customers.update(customer, {
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
            Customers.findByPk(id).then((data) => {
                res.send(data);
              })
              .catch((err) => {
                res.status(500).send({
                    message:
                    err.message || "Some error occurred while getting the Customer.",
                    })
                });
        }
    })
    .catch((err) => {
      res.status(500).send({
        message:
        err.message || "Some error occurred while updating the Counter.",
      });
    });
};
