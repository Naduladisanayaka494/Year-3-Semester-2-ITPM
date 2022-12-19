const { branches } = require("../models");
module.exports = (sequelize, Sequelize) => {
    const Steward = sequelize.define("stewards", {
        name: {
            type: Sequelize.STRING
          },
          createdAt: {
            type: Sequelize.DATE,
            allowNull: false,
            defaultValue: Sequelize.literal('CURRENT_TIMESTAMP'),
          },
          updatedAt:{
            type: Sequelize.DATE,
            allowNull: false,
            defaultValue: Sequelize.literal('CURRENT_TIMESTAMP'),
          }
    });
  
    return Steward;
  };