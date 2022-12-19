const db = require("../models");
const Branches = db.branches;
const Op = db.Op;

exports.create = (req, res) => {
  const logedUser = req.decoded.result;
    if (!req.body.name) {
      res.status(400).send({
        message: "Name can not be empty!"
      });
      return;
    }
  
    const branch = {
      name: req.body.name,
      location: req.body.location,
      storeId: logedUser.storeId
    };
  
    Branches.create(branch)
      .then(data => {
        res.send(data);
      })
      .catch(err => {
        res.status(500).send({
          message:
            err.message || "Some error occurred while creating the Branch."
        });
      });
  };

  exports.findAll = (req, res) => {
    const logedUser = req.decoded.result;

    return Branches.findAll({ where: { storeId: logedUser.storeId } })
      .then((data) => {
        res.send(data);
      })
      .catch((err) => {
        res.status(500).send({
          message:
          err.message || "Some error occurred while getting the Branches.",
        });
      });
  };