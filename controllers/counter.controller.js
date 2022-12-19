const db = require("../models");
const Counters = db.counters;
const Branch = db.branches;
const Floor = db.Floors;
const Op = db.Op;

exports.create = (req, res) => {
  const logedUser = req.decoded.result;
  if (!req.body.name) {
    res.status(400).send({
      message: "Name can not be empty!",
    });
    return;
  }


  const counter = {
    name: req.body.name,
    enabled: req.body.enabled ? req.body.enabled : true,
    branchId: logedUser.branchId,
    floorId:req.body.floor
  };

  Counters.create(counter)
    .then((data) => {
      res.send(data);
    })
    .catch((err) => {
      res.status(500).send({
        message:
          err.message || "Some error occurred while creating the Counter.",
      });
    });
};

exports.findAll = (req, res) => {
const logedUser = req.decoded.result;
  return Counters.findAll({where: { branchId: logedUser.branchId },
    include:[
    {
        model: Branch,
    },{
        model: Floor,
    }
  ]})
    .then((data) => {
      res.send(data);
    })
    .catch((err) => {
      res.status(500).send({
        message:
        err.message || "Some error occurred while getting the Counters.",
      });
    });
};

exports.getOne = (req, res) => {
  const id = req.params.id;
  return Counters.findByPk(id, {include:[
    {
        model: Branch,
    },{
        model: Floor,
    }
  ]})
    .then((data) => {
      res.send(data);
    })
    .catch((err) => {
      res.status(500).send({
        message:
        err.message || "Some error occurred while getting the Counter.",
      });
    });
};
exports.update = (req, res) => {
  const id = req.params.id;
  const product = {
    name: req.body.name,
  };
  return Counters.update(product, {
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
            Counters.findByPk(id, { include: Branch,Floor }).then((data) => {
                res.send(data);
              })
              .catch((err) => {
                res.status(500).send({
                    message:
                    err.message || "Some error occurred while getting the Counter.",
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
