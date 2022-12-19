const db = require("../models");
const Floors = db.Floors;
const Branch = db.branches;
const Op = db.Op;

exports.create = (req, res) => {
  const logedUser = req.decoded.result;
  if (!req.body.name) {
    res.status(400).send({
      message: "Name can not be empty!",
    });
    return;
  }

  const floor = {
    name: req.body.name,
    branchId: logedUser.branchId,
  };

  Floors.create(floor)
    .then((data) => {
      res.send(data);
    })
    .catch((err) => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while creating the Floor.",
      });
    });
};

exports.findAll = (req, res) => {
    const logedUser = req.decoded.result;
  return Floors.findAll({ where: { branchId: logedUser.branchId },include: Branch })
    .then((data) => {
      res.send(data);
    })
    .catch((err) => {
      res.status(500).send({
        message:
        err.message || "Some error occurred while getting the Floors.",
      });
    });
};

exports.getOne = (req, res) => {
  const id = req.params.id;
  return Floors.findByPk(id, { include: Branch })
    .then((data) => {
      res.send(data);
    })
    .catch((err) => {
      res.status(500).send({
        message:
        err.message || "Some error occurred while getting the Floor.",
      });
    });
};
exports.update = (req, res) => {
  const id = req.params.id;
  const product = {
    name: req.body.name,
  };
  return Floors.update(product, {
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
            Floors.findByPk(id, { include: Branch }).then((data) => {
                res.send(data);
              })
              .catch((err) => {
                res.status(500).send({
                    message:
                    err.message || "Some error occurred while getting the Floor.",
                    })
                });
        }
    })
    .catch((err) => {
      res.status(500).send({
        message:
        err.message || "Some error occurred while updating the Floor.",
      });
    });
};
