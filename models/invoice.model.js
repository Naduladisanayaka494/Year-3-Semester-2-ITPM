module.exports = (sequelize, Sequelize) => {
    const Invoice = sequelize.define("invoices", {
        type: {
            type: Sequelize.STRING
          },
        states: {
            type: Sequelize.INTEGER
          },
          KOT:{
            type: Sequelize.INTEGER
          },
          color:{
            type:Sequelize.BOOLEAN,
            allowNull: false,
            defaultValue: 0,

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
  
    return Invoice;
  };